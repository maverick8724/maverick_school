<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="student_info.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<?php  session_start();?>
    
<!-- Sidebar -->
<div class="w3-sidebar side w3-bar-block" style="width:15%">
  <h3 class="w3-bar-item">SCHOOL NAME</h3>
  <a href="index.php" class="w3-bar-item w3-button">HOME</a>
  <a href="about.php" class="w3-bar-item w3-button">ABOUT</a>
  <a href="contact.php" class="w3-bar-item w3-button">CONTACT</a>
  <a href="admin_page.php?logout=1" class="w3-bar-item w3-button">LOGOUT</a>
</div>

<!-- Page Content -->
<div style="margin-left:15%" class="first-div">
<section class="section1">
<?php

        ini_set("display_errors",1);
        ini_set("display_startup_errors",1);
        error_reporting(E_ALL);

        if (isset($_GET['logout'])) {
            session_destroy();
            unset($_SESSION['name']);
            unset($_SESSION['loginSuccess']);
            header('location: admin.php');
        }
    ?>

   

    <?php
        if (isset($_SESSION['loginSuccess'])) {
            echo $_SESSION['loginSuccess'];
            $_SESSION['loginSuccess'] = '';
            
            
        }
    ?>

<?php
        require 'db.php';

       $userid = $_GET['id'];

       $query = "SELECT * FROM registration  WHERE id ='$userid'";

       if ($result = $mysqli->query($query)) {
        // Do Nothing;
        } else {
            echo "User not found ". $mysqli->connect_error;
        }

        while ($student = mysqli_fetch_assoc($result)) {
            $id = $student['id'];
            $fullName = $student['full_name'];
            $email = $student['email'];
            $studentId = $student['student_id'];
            $phoneNumber = $student['phone_number'];
            $passport = $student['passport'];
            $date = $student['date'];
        }

        $mysqli->close();
    ?>

  <div class="div2">
    <div class="img">
    <img src="passport/<?php echo $passport ?>" alt="">
    </div>
    <div>
        <h2"><span>NAME : <?php echo $fullName?></span></h2><br>
        <h2 style="color: rgb(30, 111, 231); font-weight: bolder;">STUDENT ID : <?php echo $studentId ?></h2><br>
        <h3>STUDENT OF SCHOOL NAME HIGH SCHOOL</h3>
    </div>
    </div>
</section><br>

<h3 style="text-align: center;">INFO</h3><br><br>

   
<section class="section2">

<div>

<p>Email : </p>
    <p>Phone Number : </p>
    <p>Registration Date : </p>

</div>

<div>

<p><?php echo $email ?></p>
<p><?php echo $phoneNumber ?></p>
<p><?php echo $date ?></p>

</div>
    

</section>

<section class="section3">
    <a href="">EDIT PROFILE</a>
    <a href="">UPLOAD RESULT</a>
</section>

<div class="foot">

   <?php include "footer.php"?>
</div>

</div>

  
<!-- <?php include "footer.php"?> -->

    

</body>
</html>