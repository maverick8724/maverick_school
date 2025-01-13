<?php 
     session_start();

     require "db.php";
     require "sanitize.php";

    if(isset($_GET['id']) && !empty($_GET['id']) AND isset($_GET['hash']) && !empty($_GET['hash'])) {
        $id = sanitize($_GET['id']); 
        $password = sanitize($_GET['hash']); 
    
        $result = $mysqli->query("SELECT * FROM registration WHERE id='$id' AND password='$password' AND active='0'");

        if ($result->num_rows == 0) { 
            $_SESSION['message'] = "<div>Account has already been activated or the URL is invalid!</div>";
            header("location: error-page.php");
        } else {
            $_SESSION['message'] = "<div>Your account has been activated!</div>";
        
            $mysqli->query("UPDATE registration SET active='1' WHERE id='$id'") or die($mysqli->error);
            $_SESSION['active'] = 1;
            header("location: verify_success.php");
        }
    }
    else {
        $_SESSION['message'] = "<div class='info-alert'>Invalid parameters provided for account verification!</div>";
        header("location: error.php");
    }
?>