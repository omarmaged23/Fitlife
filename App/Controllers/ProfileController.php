<?php

namespace App\Controllers;
use App\Database\Connection;
use App\Helpers\Validation;
use Exception;

require_once __DIR__ . '/../Helpers/helpers.php';

class ProfileController
{
    private $conn;
    private $validator;

    public function __construct()
    {
        $this->conn = Connection::getInstance();
        $this->validator = new Validation();
    }
    public function editProfile($_DATA)
    {
        session_start();
        if (empty($_DATA) || empty($_SESSION['user']['id'])) {
            return "No data submitted";
        }
        $userId = $_SESSION['user']['id'];
        try {
            // Sanitize inputs
            $name = $this->validator->sanitize($_DATA['name']);
            $age = $this->validator->sanitize($_DATA['age']);
            $gender = $this->validator->sanitize($_DATA['gender']);
            $goal = $this->validator->sanitize($_DATA['goal']);
            $height = $this->validator->sanitize($_DATA['height']);
            $weight = $this->validator->sanitize($_DATA['weight']);
            $activity = $this->validator->sanitize($_DATA['activity']);

            // Validate inputs
            $this->validator->required('Name', $name);

            $this->validator->required('Age', $age);
            $this->validator->minAge($age);

            $this->validator->required('Gender', $gender);

            $this->validator->required('Goal', $goal);

            $this->validator->required('Height', $height);
            $this->validator->minHeight($height);

            $this->validator->required('Weight', $weight);
            $this->validator->minWeight($weight);

            $this->validator->required('Activity', $activity);

            // Start transaction
            $this->conn->beginTransaction();

            // Update main user (only name allowed here)
            $stmt = $this->conn->prepare("UPDATE users SET name = :name WHERE id = :id");
            $stmt->bindValue(':name', $name);
            $stmt->bindValue(':id', $userId, \PDO::PARAM_INT);
            $stmt->execute();

            // Update user data
            $stmt = $this->conn->prepare("UPDATE user_data 
            SET age = :age, gender = :gender, goal = :goal, 
                height = :height, weight = :weight, activity_level = :activity
            WHERE user_id = :user_id");
            $stmt->bindValue(':user_id', $userId, \PDO::PARAM_INT);
            $stmt->bindValue(':age', $age);
            $stmt->bindValue(':gender', $gender);
            $stmt->bindValue(':goal', $goal);
            $stmt->bindValue(':height', $height);
            $stmt->bindValue(':weight', $weight);
            $stmt->bindValue(':activity', $activity);
            $stmt->execute();

            // Commit changes
            $this->conn->commit();

            $_SESSION['user']['name'] = $name;
            return true;

        } catch (\PDOException $e) {
            LogError("<DB ERROR> Profile update failed: " . $e->getMessage() . "\n");
            return "Something went wrong, please contact support to fix this issue.";
        }
        catch (Exception $e) {
            // Rollback only if inside a transaction
            if ($this->conn->inTransaction()) {
                $this->conn->rollBack();
            }
            LogError("Edit profile failed: " . $e->getMessage() . "\n");
            return $e->getMessage();
        }
    }
    public function getProfile(){
        @session_start();
        if (empty($_SESSION['user']['id'])) {
            return "user is not logged in";
        }
        $userId = $_SESSION['user']['id'];
        $stmt = $this->conn->prepare("SELECT * FROM user_data WHERE user_id = :id");
        $stmt->bindValue(':id', $userId, \PDO::PARAM_INT);
        $stmt->execute();
        $user = $stmt->fetch();
        return $user;
    }

}