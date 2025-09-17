<?php

namespace App\Controllers;

use App\Database\Connection;
use App\Helpers\Validation;
use Exception;

require_once __DIR__ . '/../Helpers/helpers.php';
class AuthController
{
    private $conn;
    private $validator;

    public function __construct()
    {
        $this->conn = Connection::getInstance();
        $this->validator = new Validation();
    }

    public function register($_DATA)
    {
        if(empty($_DATA)){
            return "No data submitted";
        }
        try {
            // Sanitize Auth
            $name = $this->validator->sanitize($_DATA['name']);
            $email = $this->validator->sanitize($_DATA['email']);
            $password = $this->validator->sanitize($_DATA['password']);
            $confirmPassword = $this->validator->sanitize($_DATA['confirmPassword']);

            // Sanitize Extra Data
            $age = $this->validator->sanitize($_DATA['age']);
            $gender = $this->validator->sanitize($_DATA['gender']);
            $goal = $this->validator->sanitize($_DATA['goal']);
            $height = $this->validator->sanitize($_DATA['height']);
            $weight = $this->validator->sanitize($_DATA['weight']);
            $activity = $this->validator->sanitize($_DATA['activity']);

            if($password != $confirmPassword){
                return "Passwords does not match";
            }

            // Validate Auth
            $this->validator->required('Name', $name);
            $this->validator->required('Email', $email);
            $this->validator->email($email);
            $this->validator->minLength('Password', $password, 6);

            $this->validator->required('Age', $age);
            $this->validator->minAge( $age);

            $this->validator->required('Gender', $gender);

            $this->validator->required('Goal', $goal);

            $this->validator->required('Height', $height);
            $this->validator->minHeight($height);

            $this->validator->required('Weight', $weight);
            $this->validator->minWeight($weight);

            $this->validator->required('Activity', $activity);

            // Check if email is unique
            $check = $this->conn->prepare("SELECT id FROM users WHERE email = :email LIMIT 1");
            $check->bindParam(':email', $email);
            $check->execute();

            if ($check->fetch()) {
                throw new Exception("Email is already registered.");
            }

            // Hash password
            $hashed = password_hash($password, PASSWORD_BCRYPT);

            // Start transaction
            $this->conn->beginTransaction();

            // Insert user
            $stmt = $this->conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
            $stmt->bindValue(':name', $name);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':password', $hashed);
            $stmt->execute();

            // Get inserted user id
            $userId = $this->conn->lastInsertId();

            // Insert user data
            $stmt = $this->conn->prepare("INSERT INTO user_data (user_id, age, gender, goal, height, weight, activity_level) VALUES (:user_id, :age, :gender, :goal, :height, :weight, :activity)");
            $stmt->bindValue(':user_id', $userId, \PDO::PARAM_INT);
            $stmt->bindValue(':ages', $age);
            $stmt->bindValue(':gender', $gender);
            $stmt->bindValue(':goal', $goal);
            $stmt->bindValue(':height', $height);
            $stmt->bindValue(':weight', $weight);
            $stmt->bindValue(':activity', $activity);
            $stmt->execute();

            // Commit both queries
            $this->conn->commit();

            return true;
        } catch (\PDOException $e) {
            LogError("<DB ERROR> Registration failed: " . $e->getMessage() . "\n");
            return "Something went wrong, please contact support to fix this issue.";
        }
        catch (Exception $e) {
            // Rollback everything if error
            if ($this->conn->inTransaction()) {
                $this->conn->rollBack();
            }
            LogError("Registration failed: " . $e->getMessage() . "\n");
            return $e->getMessage();
        }
    }

    public function login($_DATA)
    {
        if(empty($_DATA)){
            return "No data submitted";
        }
        try {
            // Sanitize
            $email = $this->validator->sanitize($_DATA['email']);
            $password = $this->validator->sanitize($_DATA['password']);

            // Validate
            $this->validator->required('Email', $email);
            $this->validator->required('Password', $password);

            // Prepare + bindValue
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
            $stmt->bindValue(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch();

            if (!$user || !password_verify($password, $user->password)) {
                return throw new Exception("Make sure your credentials are correct!");
            }

            // Start session
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            session_regenerate_id(true);
            $_SESSION['user'] = [
                'id'    => $user->id,
                'name'  => $user->name,
                'email' => $user->email
            ];
            return true;
        }
        catch (\PDOException $e) {
            LogError("<DB ERROR> Login failed: " . $e->getMessage() . "\n");
            return "Something went wrong, please contact support to fix this issue.";
        }
        catch (Exception $e) {
            LogError("Login failed: " . $e->getMessage() . "\n");
            return $e->getMessage();
        }
    }
    public function logout(){
        try {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            // Unset all session variables
            $_SESSION = [];

            // Destroy the session
            session_destroy();
            return true;
        } catch (\Exception $e) {
            LogError("Logout failed: " . $e->getMessage() . "\n");
            return false;
        }
    }
}
