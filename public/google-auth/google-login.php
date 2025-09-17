<?php

require_once '../../vendor/autoload.php';
require_once '../../App/google-config.php';

session_start();

$client = new Google_Client();
$client->setClientId(GOOGLE_CLIENT_ID);
$client->setClientSecret(GOOGLE_CLIENT_SECRET);
$client->setRedirectUri(GOOGLE_REDIRECT_URI);
$client->addScope('email');
$client->addScope('profile');

// Redirect to Google login page
header('Location: ' . $client->createAuthUrl());
exit;