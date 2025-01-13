<?php 
$host = 'localhost';
$user = 'maverick_maverick';
$pass ='maverick872478';
$db = 'maverick_school_db';


$mysqli = new mysqli($host,$user,$pass,$db);


if ($mysqli -> connect_error){
    // die('Connect Error (' . $mysqli ->connect_errno . ') ' . $mysqli->connect_error);
    // OR
    echo "failed to connect to database:". $mysqli->connect_error;
    exit();
}

else {
    // Do Nothing
}