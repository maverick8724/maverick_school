<?php
    require 'db.php';
    include 'sanitize.php';

    if (isset($_POST['submit'])) {
        $fullName = $_POST['name'];
        $mathematics = $_POST['mathematics'];
        $english = $_POST['english'];
        $physics = $_POST['physics'];
        $biology = $_POST['biology'];
        $chemistry = $_POST['chemistry'];

        $query = "INSERT INTO upload_results (full_name, mathematics, english, physics, biology, chemistry) VALUES ('$fullName', '$mathematics', '$english', '$physics', '$biology', '$chemistry')";

        if ($mysqli->query($query)) {
            echo "<p>result uploaded successfully</p>";
        } else {
            echo "Oops there was an error ". $mysqli->connect_error;
        }

        $mysqli->close();


    }
?>
