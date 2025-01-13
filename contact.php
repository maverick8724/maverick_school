<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<?php 
include 'nav.php';
include 'contact_handler.php';


?>


<section class="section1">
    <h1>CONTACT US</h1>

</section>

<div>
<h2>Call us at <span style="color: black;">08136325127</span> or fill out the form below</h2>
</div>


<section class="section2">
    <div class="div1">

    <form action="contact.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" name="name" class="input1"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" class="input1"><br>
        <label for="number">Phone No:</label><br>
        <input type="number" name="number" class="input1"><br>
        <label for="message">Message:</label><br>
        <input type="text" name="message" class="input1"><br>
        <input type="submit" name="submit" value="Submit" class="submit">
    </form>
    </div>
    
</section>

<div>
<?php include 'footer.php'?>
</div>


    
</body>
</html>