<?php

session_start();

ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);

require 'db.php';

if (isset($_POST['register'])) {
    $fullName = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['cpassword'];


    $query = "SELECT * FROM admin_login WHERE email = '$email' ";

    $result = $mysqli->query($query);

    if ($result -> num_rows > 0) {
        $_SESSION['error'] =  '<p>User Already Exist</p>';
    }

   else if(empty($fullName)){
        $_SESSION['error'] =  "Full Name is required";
    }

   else if(empty($email)){
        $_SESSION['error'] =  "Email is required";
    }

   else if(empty($password)){
        $_SESSION['error'] =  "Password is required";
    }

   else if(empty($confirmPassword)){
        $_SESSION['error'] =  "Confirm Password is required";
    }


    else if (count($errors) == 0) {
        $_SESSION['error'] =  "<p>something went wrong</p>";
    } 
    else {
        $password = password_hash($password, PASSWORD_DEFAULT);
    
        $query = "INSERT INTO admin_login (full_name, email, password, date) VALUES ('$fullName', '$email', '$password', NOW())";
        $result = $mysqli->query($query);
        header('location: admin.php');
    }

}