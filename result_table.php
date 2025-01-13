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
    <h1>Student  Result Table</h1>

    <?php
        require 'db.php';
        

        $query = "SELECT * FROM upload_results";

        $result = $mysqli->query($query);

        echo "<table><tr>";
        echo "<th class='id'>ID</th>";
        echo "<th class='name'>Full Name</th>";
        echo "<th class='mathematics'>Mathematics</th>";
        echo "<th class='english'>English</th>";
        echo "<th class='physics'>Physics</th>";
        echo "<th class='biology'>Biology</th>";
        echo "<th class='chemistry'>Chemistry</th>";
        echo "<th class='view'>Update Result</th>";
        echo "</tr>";

        while ($student = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$student['id']."</td>";
            echo "<td>".$student['full_name']."</td>";
            echo "<td>".$student['mathematics']."</td>";
            echo "<td>".$student['english']."</td>";
            echo "<td>".$student['physics']."</td>";
            echo "<td>".$student['biology']."</td>";
            echo "<td>".$student['chemistry']."</td>";
            echo "</tr>";
        }

        echo "</table>";

        $mysqli->close();
    ?>

<?php include 'footer.php' ?>

    
</body>
</html>