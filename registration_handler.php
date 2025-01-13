<?php

session_start();

ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);

require 'db.php';
include 'sanitize.php';




if (isset($_POST['submit'])){
    // SET SESSION VARIABLE
    $_SESSION['error'] = "";
    $_SESSION['name'] = sanitize($_POST['name']);
    $_SESSION['email'] = sanitize($_POST['email']);

    $fullName = sanitize($_POST['name']);
    $email = sanitize($_POST['email']);
    $phoneNumber = sanitize($_POST['number']);
    $studentId = sanitize($_POST['studentid']);
    $password = sanitize($_POST['password']);
    $confirmPassword = sanitize($_POST['cpassword']);

    $passport = $_FILES['passport'];
    $passportName = sanitize($passport['name']);
    $passportSize = $passport['size'];
    $passportTmpName = $passport['tmp_name'];

    $uniquePassportName = uniqid().'_'.$passportName;
    $passportFolderName = 'passport/';
    $passportFilePath = $passportFolderName.$uniquePassportName;
    $passportFileExtension = strtolower(pathinfo($passportFilePath, PATHINFO_EXTENSION));
    $allowedPassportExtensions = array('jpg', 'jpeg', 'png');


   

    // CHECK FOR EXISTING USER OR EMAIL
    $query = "SELECT * FROM registration WHERE email = '$email' ";

    $result = $mysqli->query($query);


    if ($result -> num_rows > 0)  {
        $_SESSION['error'] = '<p>User Already Exist</p>';
    }

   else if (empty($fullName)) {
        $_SESSION['error'] = '<p>Full Name is required</p>';
    }
   
   else if (empty($email)) {
         $_SESSION['error'] = '<p>Email is required</p>';
    }
   else if (empty($phoneNumber)) {
        $_SESSION['error'] =  '<p>Phone number is required</p>';
    }
   else if (empty($studentId)) {
        $_SESSION['error'] =  '<p>Student ID is required</p>';
    }
   else if (empty($password)) {
        $_SESSION['error'] =  '<p>Password is required</p>';
    }
   else if (empty($confirmPassword)) {
        $_SESSION['error'] =  '<p>Please confirm your password</p>';
    }
   else if ($password != $confirmPassword) {
      $_SESSION['error'] = '<p>Password dismatch</p>';
    }


   else if (!in_array($passportFileExtension, $allowedPassportExtensions)) { 
      $_SESSION['error'] =  '<p>You cannot upload files of this type</p>';
   }
   else if ($passportSize >= 2000000) {
            $_SESSION['error'] =  '<p>Your file is greater than 2MB</p>';
    }
    else { 
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO registration (full_name, email, phone_number, student_id, password, passport, date) VALUES ('$fullName', '$email', '$phoneNumber', '$studentId', '$hashedPassword', '$uniquePassportName', NOW())";



            if($result = $mysqli->query($query)) {

            move_uploaded_file($passportTmpName, $passportFilePath); 

            $result = $mysqli->query("SELECT * FROM registration WHERE email='$email'");
                $user = $result->fetch_assoc();

                $id = $user['id'];
                
                $_SESSION['active'] = 0;
                $_SESSION['logged_in'] = true;


                $_SESSION['message'] = "<div class='info-success'>Confirmation link has been sent to <span>$email</span>, please verify your account by clicking on the link in the message!</div>";

                $to = $email;
                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                $headers .= 'From: Maverick School <info@maverickschool.com.ng>' . "\r\n";
                $headers .= 'Reply-To: info@maverickschool.com.ng' . "\r\n";
                $subject = 'Account Verification';
                $message =  '<html>
                            <head>
                                <title>TEST</title>
                                <style type="text/css">
                                    body
                                    {
                                        background: #c1bdba;
                                        font-family: "Titillium Web", sans-serif;
                                    }
                                    a
                                    {
                                        text-decoration: none;
                                        color: #1ab188;
                                        -webkit-transition: .5s ease;
                                        transition: .5s ease;
                                    }
                                    a:hover
                                    {
                                        color: #179b77;
                                    }
                                    h1
                                    {
                                        font-size: 18px;
                                        text-align: center;
                                        color: #ffffff;
                                        font-weight: 300;
                                    }
                                    h2
                                    {
                                        text-align: center;
                                        color: #1ab188;
                                        font-weight: 1000;
                                    }
                                    span
                                    {
                                        color: #1ab188;
                                        font-weight: bold;
                                    }
                                    p
                                    {
                                        text-align: center;
                                        color: #ffffff;
                                        margin: 0px 0px 50px 0px;
                                        padding-top: 2px;
                                    }
                                    .form
                                    {
                                        background: rgba(19, 35, 47, 0.9); 
                                        padding: 40px;
                                        max-width: 600px;
                                        margin: 40px auto;
                                        border-radius: 4px;
                                        box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
                                    }
                                    .button
                                    {
                                        font-family: "Titillium Web", sans-serif;
                                        border: 0;
                                        outline: none;
                                        border-radius: 0;
                                        padding: 15px 0;
                                        margin-top: 30px;
                                        font-size: 2rem;
                                        font-weight: 600;
                                        text-transform: uppercase;
                                        letter-spacing: .1em;
                                        background: #1ab188;
                                        color: #ffffff;
                                        -webkit-transition: all 0.5s ease;
                                        transition: all 0.5s ease;
                                        -webkit-appearance: none;
                                    }
                                    .button:hover, .button:focus
                                    {
                                        background: #179b77;
                                    }
                                    .button-block
                                    {
                                        display: block;
                                        width: 100%;
                                    }
                                </style>
                            </head>
                            <body>
                                <div class="form">
                                    <h1 style="font-size: 20px; text-align: left;">Hello <a>'.$fullName.'</a>,</h1><br>
                            
                                    <h1>Thank you for signing up!<br>
                            
                                    Please click the button below to activate your account:<br></h1>
                            
                                    <a href="https://maverickschool.com.ng/verify.php?id='.$id.'&hash='.$hashedPassword.'"><button class="button button-block">Activate Account</button></a>
                                </div>
                            </body>
                            </html>';
                mail($to, $subject, $message, $headers);
                header("location: reg-success.php");
            } else{
                $_SESSION['error'] = '<div class="info-alert">Registration failed!</div>';
                header("location: student.php");
            }
        }
        
    } 
       
 




