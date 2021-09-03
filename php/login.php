<?php

    if(isset($_POST['loginBtn'])) {
        session_start();
        
        if((!isset($_POST['email']) || empty(trim($_POST['email']))) && (!isset($_POST['password']) || empty(trim($_POST['password'])))) {
            $_SESSION['empty_fields'] = "Please insert all fields";
            header("Location: ../login.php");
            exit();
        } else if (!isset($_POST['email']) || empty(trim($_POST['email']))) {
            $_SESSION['empty_email'] = "Please insert email field";
            header("Location: ../login.php");
            exit();   
        } else if (!isset($_POST['password']) || empty(trim($_POST['password']))) {
            $_SESSION['empty_password'] = "Please insert password field";
            header("Location: ../login.php");
            exit();
        }
        
        if(!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
            $_SESSION['invalid_email'] = "Invalid email format";
            header("Location: ../login.php");
            exit(); 
        }
        
        if(trim($_POST['email']) !== "admin@gmail.com" && trim($_POST['password']) !== "@Admin123") {
            $_SESSION['wrong_login_details'] = "Wrong login details";
            header("Location: ../login.php");
            exit();
        }
        
        header("Location: ../index.php");
        $_SESSION['admin']['user_id'] = 19;
        $_SESSION['admin']['lname'] = "Zuma";
        $_SESSION['admin']['fname'] = "Jacob";
    }

?>