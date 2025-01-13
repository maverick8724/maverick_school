<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="admin_page.css">
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
  <a href="result_table.php" class="w3-bar-item w3-button">RESULT TABLE</a>
  <a href="admin_page.php?logout=1" class="w3-bar-item w3-button">LOGOUT</a>
</div>

<!-- Page Content -->
<div style="margin-left:15%" class="first-div">
<section class="section1">
<?php

        ini_set("display_errors",1);
        ini_set("display_startup_errors",1);
        error_reporting(E_ALL);


        if (!isset($_SESSION['name'])) {
            $_SESSION['msg'] = '<p>You must login to view this page!</p>';
            header('location: admin.php');
        } 
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

<h1>SCHOOL MANAGEMENT DASHBOARD</h1><div class="hr"><hr></div>
<div class="container1">
<div class="card">
<div class=""><img src="images/student-silhouette.jpg" alt=""></div>
  <div class="">
    <h2>Students</h2>
    <a href="student_details.php">View</a>
  </div>
</div>

<div class="card">
<div class=""><img src="images/teacher-silhouette-icon-of-a-teacher-teaching-a-student-in-a-class-studying-at-school-vector.jpg" alt=""></div>
  <div class="">
    <h2>Teachers</h2>
    <a href="">View</a>
  </div>
</div>


<div class="card">
<div class=""><img src="images/school-silhouette.jpg" alt=""></div>
  <div class="">
    <h2>Subjects/Courses</h2>
    <a href="">View</a>
  </div>
</div>


</div>
</section>

<section class="section2">

<div class="notice">
    <h2>NOTICE BOARD</h2><div><hr></div>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione a, error iure explicabo eius neque aperiam voluptatem ipsam molestias beatae dolor quisquam, debitis labore saepe excepturi maxime quaerat porro minima.</p>

    <a href="">Edit</a>

</div>

<div class="notice">
    <h2>NOTICE BOARD</h2><div><hr></div>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione a, error iure explicabo eius neque aperiam voluptatem ipsam molestias beatae dolor quisquam, debitis labore saepe excepturi maxime quaerat porro minima.</p>

    <a href="">Edit</a>

</div>

</section>


<div class="foot">

   <?php include "footer.php"?>
</div>

</div>

  
</body>
</html>