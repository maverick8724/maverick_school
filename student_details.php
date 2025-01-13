<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="student_details.css">
    <link rel="stylesheet" href="nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<?php  session_start();?>
    <?php
    
    include 'nav.php'
    ?>
    <div class="push"></div>
    <h1>Student Details</h1>

    <?php
        require 'db.php';
        

        $query = "SELECT * FROM registration";

        $result = $mysqli->query($query);

        echo "<table><tr>";
        echo "<th class='id'>ID</th>";
        echo "<th class='name'>Name</th>";
        echo "<th class='email'>Email</th>";
        echo "<th class='number'>Phone Number</th>";
        echo "<th class='student_id'>Student ID</th>";
        echo "<th class='passport'>Passport</th>";
        echo "<th class='date'>Date</th>";
        echo "<th class='view'>Client Details</th>";
        echo "<th class='view'>Results</th>";
        echo "</tr>";

        while ($student = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$student['id']."</td>";
            echo "<td>".$student['full_name']."</td>";
            echo "<td>".$student['email']."</td>";
            echo "<td>".$student['phone_number']."</td>";
            echo "<td>".$student['student_id']."</td>";
            echo "<td>".$student['passport']."</td>";
            echo "<td>".$student['date']."</td>";
            echo "<td><a href='student_info.php?id=".$student['id']."'>View ".$student['id']."</a>" . "<a href='edit_profile.php?id=".$student['id']."'>Edit ".$student['id']."</a></td>";
            echo "<td><a href='upload_results.php?id=".$student['id']."'>Upload Result ".$student['id']."</a></td>";
            echo "</tr>";
        }

        echo "</table>";

        $mysqli->close();
    ?>

<?php include 'footer.php' ?>

    
</body>
</html>