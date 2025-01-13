<?php
    require 'db.php';

    if (isset($_POST['submit'])) {
        $userid = $_POST['id'];
        $fullName = $_POST['name'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['number'];

        $query = "UPDATE registration SET full_name='$fullName', email='$email', phone_number= $phoneNumber WHERE id='$userid'";

        if ($mysqli->query($query)) {
            echo "<p>Your record has been Edited successfully</p>";
        } else {
            echo "Oops there was an error ". $mysqli->connect_error;
        }

        $mysqli->close();


    }
?>
