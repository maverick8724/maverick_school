<?php
     include 'registration_handler.php';

ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);

    require 'db.php';
    // include 'sanitize.php';
   

   


    // student_handler
    if(isset($_POST['login'])) {
        $email = sanitize($_POST['email']);
        $studentId = sanitize($_POST['studentid']);
        $password = sanitize($_POST['password']);

        $query = "SELECT * FROM registration WHERE email = '$email'";

        $result = $mysqli->query($query);

        // CHECK FOR ERRORS
        if ($result->num_rows == 0) {
            $_SESSION['error'] = "<p>A user with this email doesn't exist</p>";
        }
        else if (empty($email)) {
            $_SESSION['error'] = '<p>email is required</p>';
        }

        else if (empty($studentId)) {
            $_SESSION['error'] = '<p>student ID is required</p>';
        }
        else if (empty($password)) {
            $_SESSION['error'] = '<p>Password is required</p>';
        }
        else {
            $user = mysqli_fetch_assoc($result);

            if (password_verify($password, $user['password'])) {
                $_SESSION['loginSuccess'] = '<p>Login Successful</p>';
                $_SESSION['name'] = $user['full_name'];
                $_SESSION['email'] = $user['email'];

                $_SESSION['logged_in'] = true;

                header('location: student_profile.php');
            } 
            else {
                $_SESSION['error'] = '<p>Invalid password. Try again!</p>';
                $_SESSION['loginSuccess'] = '';
                $_SESSION['name'] = '';
            }
        }
    }

    $mysqli->close();

?>