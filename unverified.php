<?php
    session_start();
    require "db.php";
    require "sanitize.php";

    if (isset($_SESSION['logged_in']) != 1) {
        header("location: student.php");
    } else {
	    $email = sanitize($_SESSION['email']);
        $result = $mysqli->query("SELECT * FROM registration WHERE email='$email'");
        $user = $result->fetch_assoc();

        $fullName = $user['full_name'];
        $id = $user['student_id'];
        $email = $user['email'];
        $active = $user['active'];

        if ($active == "1") {
    	      header("location: student_profile.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<?php

include 'nav.php';
?>
    
<h1>UNVERIFIED ACCOUNT</h1>

<section class="form">
        <?php 
            if (isset($_SESSION['message']) AND !empty($_SESSION['message']))
            {
                echo $_SESSION['message'];
            }
        ?>
        <!-- <a href="index.php">Home</a> -->
    </section>

<a href="student.php">View profile</a>
</body>
</html>