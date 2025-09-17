<?php
require_once '../../vendor/autoload.php';
require_once '../../App/Database/Connection.php';
require_once '../../App/google-config.php';

use App\Database\Connection;

session_start();

$client = new Google_Client();
$client->setClientId(GOOGLE_CLIENT_ID);
$client->setClientSecret(GOOGLE_CLIENT_SECRET);
$client->setRedirectUri(GOOGLE_REDIRECT_URI);
$client->addScope("email");
$client->addScope("profile");

if (!isset($_GET['code'])) {
    die("No authorization code returned from Google.");
}

try {
    // Exchange code for token
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    // Check for errors
    if (isset($token['error'])) {
        error_log("[" . date('Y-m-d H:i:s') . "] Google OAuth error: " . json_encode($token) . "\n", 3, __DIR__ . "/oauth_errors.log");
        die("Google Login failed: " . htmlspecialchars($token['error_description'] ?? $token['error']));
    }

    $client->setAccessToken($token);

    // Get user profile info
    $oauth = new Google_Service_Oauth2($client);
    $googleUser = $oauth->userinfo->get();

    if (!$googleUser || empty($googleUser->email)) {
        die("Failed to fetch user info from Google.");
    }

    $conn = Connection::getInstance();

    // Check if user already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE google_id = :gid OR email = :email LIMIT 1");
    $stmt->execute([
        ':gid'   => $googleUser->id,
        ':email' => $googleUser->email
    ]);
    $user = $stmt->fetch();

    if ($user) {
        // If exists, update google_id if missing
        if (empty($user->google_id)) {
            $update = $conn->prepare("UPDATE users SET google_id = :gid WHERE id = :id");
            $update->execute([
                ':gid' => $googleUser->id,
                ':id'  => $user->id
            ]);
        }
        $userId = $user->id;
    } else {
        // Insert new user
        $conn->beginTransaction();

        $insert = $conn->prepare("INSERT INTO users (name, email, google_id, avatar) 
                                  VALUES (:name, :email, :gid, :avatar)");
        $insert->execute([
            ':name'   => $googleUser->name,
            ':email'  => $googleUser->email,
            ':gid'    => $googleUser->id,
            ':avatar' => $googleUser->picture
        ]);
        $userId = $conn->lastInsertId();

        // Insert user data
        $insert = $conn->prepare("INSERT INTO user_data (user_id) VALUES (:user_id)");
        $insert->bindValue(':user_id', $userId, \PDO::PARAM_INT);
        $insert->execute();

        // Commit both queries
        $conn->commit();
    }

    // Store session safely
    $_SESSION['user'] = [
        'id'     => $userId,
        'name'   => $googleUser->name,
        'email'  => $googleUser->email,
        'avatar' => $googleUser->picture
    ];

    header("Location: ../vegan-diet.php");
    exit;

} catch (Exception $e) {
    error_log("[" . date('Y-m-d H:i:s') . "] Callback Exception: " . $e->getMessage() . "\n", 3, __DIR__ . "/oauth_errors.log");
    die("Unexpected error during Google login. Please try again.");
}
