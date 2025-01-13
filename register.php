<?php 

    include 'registration_handler.php';

    // if (isset($_SESSION['logged_in']) == 1) {
    //     header('location: student_profile.php');
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>


<?php 
include 'nav.php';
?>


<section>




<h2>REGISTRATION REGISTRATION REGISTRATION</h2>
<div class="div">

<h1>Registration</h1><hr><br>
<?php
     if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        $_SESSION['error'] = "";
    }
?>
<form action="register.php" method="post" enctype="multipart/form-data">
    <label for="name">Fullname:</label><br>
    <input type="text" name="name" id="" value="<?php if (isset($_POST['submit'])){echo $fullName;}?>" required><br>
    <label for="email">Email:</label><br>
    <input type="email" name="email" id="" value="<?php if (isset($_POST['submit'])){echo $email;}?>" required><br>
    <label for="number">Phone Number:</label><br>
    <input type="number" name="number" id="" value="<?php if (isset($_POST['submit'])){echo $phoneNumber;}?>" required><br>
    <label for="id">ID:</label><br>
    <input type="number" name="studentid" id="" value="<?php if (isset($_POST['submit'])){echo $studentId;}?>" required><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" id="" value="<?php if (isset($_POST['submit'])){echo $password;}?>" required><br>
    <label for="cpassword">Confirm Password:</label><br>
    <input type="password" name="cpassword" id="" value="<?php if (isset($_POST['submit'])){echo $confirmPassword;}?>" required><br>
    <label for="passport">Upload Passport:</label><br>
    <input type="file" name="passport" id="" required><br>
    <div class="submit">
    <input type="submit" value="Submit" name="submit">
</div>

</form>

</div>
</section>

<div>

<p>Already have an account ? <span><a href="student.php">Login</a></span> </p>

</div>

<?php include 'footer.php' ?>
    
</body>
</html>