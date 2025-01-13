<?php
    session_start();

ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);

    require 'db.php';
    include 'sanitize.php';
    // include 'registration_handler.php';



    // admin_handler
    if (isset($_POST['login'])) {
        $name = sanitize($_POST['name']);
        $password = sanitize($_POST['password']);

        // CHECK FOR ERRORS
        if (empty($name)) {
            $_SESSION['error'] = '<p>Name is required</p>';
            return;
        }
            
        
        if (empty($password)) {
            $_SESSION['error'] =  '<p>Password is required</p>';
            return;
        }

        // LOGIN USER IF NO ERROR
        $query = "SELECT * FROM admin_login WHERE full_name = '$name'";

        $result = $mysqli->query($query);
        $user = mysqli_fetch_assoc($result);

        if ($user['full_name'] === $name && password_verify($password, $user['password'])) {
            $_SESSION['loginSuccess'] = '<p>Login Successful</p>';
            $_SESSION['name'] = $user['full_name'];
            $_SESSION['password'] = $user['password'];
            header('location: admin_page.php');
        } else {
            $_SESSION['error'] =  '<p>Incorrect Name/Password Combination. Try again!</p>';
            $_SESSION['loginSuccess'] = '';
            $_SESSION['name'] = '';
        }
    }


    $mysqli->close();

