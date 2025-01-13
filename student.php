<?php
     include 'student_handler.php';

     if (isset($_SESSION['logged_in']) == 1) {
        header('location: student_profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="student.css">
    <link rel="stylesheet" href="nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<?php include 'nav.php'; ?>

<section>


<h2>STUDENT STUDENT</h2>

<div class="div1">
    <h1>Student Login</h1><hr><br>

    <?php
    
    if (isset($_SESSION['message']) AND !empty($_SESSION['message']))
    {
        echo $_SESSION['message'];
    }

         if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            $_SESSION['error'] = "";
            // unset($_SESSION['success']);
        }
    ?>

    <form action="student.php" method="post">
        <input type="email" name="email" id="email" placeholder="Email" value="<?php if(isset($_POST['login'])){echo $email;}?>"><br>
        <input type="number" name="studentid" id="studentid" placeholder="studentID" value="<?php if(isset($_POST['login'])){echo $studentId;}?>"><br>
        <input type="password" name="password" id="password" placeholder="password" value="<?php if(isset($_POST['login'])){echo $password;}?>"><br>
        <input type="submit" value="Login" name="login">
    </form>

</div>
</section>

<div class="div2">

<p>Don't have an account ? <span><a href="register.php">Register</a></span> </p>

</div>

<?php include "footer.php"?>
    
</body>
</html>