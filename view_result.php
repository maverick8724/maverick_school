<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view_result.css">
    <link rel="stylesheet" href="nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<?php

session_start();

require 'db.php';
include 'nav.php';

?>

<h1 class="stud">STUDENT RESULTS</h1>


<?php

$fullName = $_GET['fullname'];

$query = "SELECT * FROM upload_results WHERE full_name = '$fullName'";
$result = $mysqli->query($query);

$student = mysqli_fetch_assoc($result);

?>

<h2 class="htwo">STUDENT'S NAME : <?php echo $student['full_name'];?></h2>

<div class="result">
<table>
<tr>

<th class="subjects">SUBJECTS</th>
<th class="points">POINTS</th>
</tr>

<tr>
    <td class="marks">MATHEMATICS</td>
    <td class="marks"><?php  echo $student['mathematics'];?><b>/100</b></td>
</tr>

<tr>
    <td class="marks">ENGLISH</td>
    <td class="marks"><?php  echo $student['english'];?><b>/100</b></td>
</tr>

<tr>
    <td class="marks">PHYSICS</td>
    <td class="marks"><?php  echo $student['physics'];?><b>/100</b></td>
</tr>

<tr>
    <td class="marks">BIOLOGY</td>
    <td class="marks"><?php  echo $student['biology'];?><b>/100</b></td>
</tr>

<tr>
    <td class="marks">CHEMISTRY</td>
    <td class="marks"><?php  echo $student['chemistry'];?><b>/100</b></td>
</tr>


</table>
</div>


<?php include "footer.php"?>
    
</body>
</html>