<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>

<?php include 'nav.php'?>

<section>

<?php
        include 'admin_handler.php';

        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            $_SESSION['msg'] = "";
            // unset($_SESSION['success']);
        }

        if (isset($_SESSION['success'])) {
            echo $_SESSION['success'];
            $_SESSION['success'] = "";
            // unset($_SESSION['success']);
        }
    ?>

<h2>ADMIN ADMIN</h2>

<div>
    <h1>Admin Login</h1><hr><br>

    <form action="admin.php" method="post">
        <input type="text" name="name" id="name" placeholder="name"><br>
        <input type="password" name="password" id="password" placeholder="password"><br>
        <input type="submit" value="Login" name="login">
    </form>

</div>
</section>


<?php include 'footer.php' ?>
    
    
</body>
</html>