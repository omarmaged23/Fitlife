<?php
require_once '../../App/Database/Connection.php';
require_once '../../App/Helpers/Validation.php';
require_once '../../App/Controllers/AuthController.php';
require_once '../../App/Controllers/ProfileController.php';

use App\Controllers\AuthController;
use App\Controllers\ProfileController;

$auth = new AuthController();
$profile = new ProfileController();

if(isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'POST'){

    if($_GET['action'] == 'register' && !empty($_POST)){
        $status = $auth->register($_POST);
        session_start();
        if($status === true){
            $_SESSION['success'] = 'Account created successfully!';
            header('Location: ../login.php');
        }else {
            $_SESSION['error'] = $status;
            header('Location: ../register.php');
        }
    }

    if($_GET['action'] == 'login' && !empty($_POST)){
        $status = $auth->login($_POST);
        session_start();
        if($status === true){
            header('Location: ../vegan-diet.php');
        }else {
            $_SESSION['error'] = $status;
            header('Location: ../login.php');        }
    }

    if($_GET['action'] == 'edit_profile' && !empty($_POST)){
        $status = $profile->editProfile($_POST);
        session_start();
        if($status === true){
            $_SESSION['success'] = 'Changes saved successfully!';
            header('Location: ../profile.php');
        }else {
            $_SESSION['error'] = $status;
            header('Location: ../profile.php');        }
    }
} elseif (isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET'){
    if($_GET['action'] == 'logout'){
        $status = $auth->logout();
        header('Location: ../index.php');
    }
}