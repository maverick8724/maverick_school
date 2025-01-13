<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>UPLOAD RESULT</h1>

<?php
        require 'db.php';
       
        include 'upload_handler.php';
    ?>

    <form action="upload_handler.php" method="post" enctype="multipart/form-data">
        
        <label for="name">Name:</label>
        <input type="text" name="name"> <br> <br>

        <label for="mathematics">Mathematics:</label>
        <input type="text" name="mathematics"> <br> <br>

        <label for="english">English:</label>
        <input type="text" name="english"> <br> <br>

        <label for="physics">Physics:</label>
        <input type="text" name="physics"><br><br>

        <label for="biology">Biology:</label>
        <input type="text" name="biology"><br><br>

        <label for="chemistry">Chemistry:</label>
        <input type="text" name="chemistry"><br><br>

        <input type="submit" name="submit">
    </form>
    
  
</body>
</html>