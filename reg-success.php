<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maverick's Schools</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/b90c03ffcb.js" crossorigin="anonymous"></script>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- JAVASCRIPT -->
    <script src="js/script.js" defer></script>
    <script src="js/validation.js" defer></script>

    <!-- STYLES -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/overlay.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
   <!-- NAVIGATION SECTION -->
   <?php 
      $page = 'home'; 
      include 'nav.php'; 
   ?>

    <section class="hero-section raleway">
        <h1>REGISTRATION SUCCESSFUL</h1>
    </section>

    <section class="form">
        <?php 
            if (isset($_SESSION['message']) AND !empty($_SESSION['message']))
            {
                echo $_SESSION['message'];
            }
        ?>
        <a href="index.php">Home</a>
    </section>



    <!--FOOTER SECTION-->
    <?php include 'footer.php'; ?>
</body>
</html>