<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EDIT USER RECORD</h1>

<?php
        require 'db.php';

       $userid = $_GET['id'];

       $query = "SELECT * FROM registration  WHERE id='$userid'";

       if ($result = $mysqli->query($query)) {
        // Do Nothing;
        } else {
            echo "User not found ". $mysqli->connect_error;
        }

        while ($student = mysqli_fetch_assoc($result)) {
            $id = $student['id'];
            $fullName = $student['full_name'];
            $email = $student['email'];
            $phoneNumber = $student['phone_number'];
            $passport = $student['passport'];
        }

        $mysqli->close();
    ?>

    <form action="edit_handler.php" method="post" enctype="multipart/form-data">
        <label for="id">Id:</label>
        <input type="text" name="id" value="<?php echo $id; ?>"> <br> <br>
        
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $fullName; ?>"> <br> <br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>"> <br> <br>

        <label for="number">Phone Number:</label>
        <input type="number" name="number" value="<?php echo $phoneNumber; ?>"> <br> <br>

        <label for="passport">Change Passport:</label> <br> 
        <input type="file" name="passport" value="<?php echo $passport; ?>"><br>

        <input type="submit" name="submit">
    </form>
    
  
</body>
</html>