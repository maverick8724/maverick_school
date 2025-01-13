<?php
        session_start();

        ini_set("display_errors",1);
        ini_set("display_startup_errors",1);
        error_reporting(E_ALL);

        require 'db.php';
        include 'sanitize.php';

        if ($_SESSION['logged_in'] != 1) {
            $_SESSION['message'] = '<p>You must login to view this page!</p>';
            header('location: student.php');
        }

        if (isset($_GET['logout'])) {
            session_destroy();
            unset($_SESSION['name']);
            unset($_SESSION['loginSuccess']);
            header('location: student.php');
        }

        else {
            $email = sanitize($_SESSION['email']);
            $result = $mysqli->query("SELECT * FROM registration WHERE email='$email'");
            $user = $result->fetch_assoc();
    
            $id = $user['id'];
            $fullName = $user['full_name'];
            $email = $user['email'];
            $phoneNumber = $user['phone_number'];
            $active = $user['active'];
        }
    
        // CHECK IF THE CANDIDATE'S EMAIL IS VERIFIED 
        if ($active == "0") {
            $_SESSION['message'] = '<div>Account is unverified, please confirm your email by clicking on the link sent to your email!</div>
            <a href="resend_verification.php">Resend Link</a>';
     
            header("location: unverified.php");
        }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="student_profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<?php
    include 'nav.php';
?>

<div class="anchor">
   

</div>


    <?php
       

       $userEmail = $_SESSION['email'];

       $query = "SELECT * FROM registration  WHERE email='$userEmail'";

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
        <h2 style="color: white; font-weight: bolder;">STUDENT ID : <?php echo $studentId ?></h2><br>
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
    <div><?php echo "<a href='view_result.php?fullname=".$fullName."'>Check Result</a>" ?></div>
    <div><a href="student.php" name='logout'>LOGOUT</a></div>
</section>

    <?php include "footer.php"?>

</body>
</html>