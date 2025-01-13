<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin_registration.css">
    <link rel="stylesheet" href="nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>


<?php 
include 'nav.php';
?>


<section>

<?php 
include 'admin_registration_handler.php';
?>


<h2>REGISTRATION REGISTRATION REGISTRATION</h2>
<div class="div">

<h1>Admin Registration</h1><hr><br>

<form action="admin_registration.php" method="post">
    <label for="name">Fullname:</label><br>
    <input type="text" name="name" id=""><br>
    <label for="email">Email:</label><br>
    <input type="email" name="email" id=""><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" id=""><br>
    <label for="cpassword">Confirm Password:</label><br>
    <input type="password" name="cpassword" id=""><br>
  
    <div class="submit">
    <input type="submit" value="Register" name="register">
</div>

</form>

</div>
</section>


<?php include 'footer.php' ?>
    
</body>
</html>