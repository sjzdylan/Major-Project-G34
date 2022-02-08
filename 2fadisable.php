<?php
session_start();

include('dbcon.php');

if(isset($_POST['disable2fa'])) {
    
    $disable2fa = $database->getReference("userinfo/".$_SESSION["user_id"]."/".$_SESSION["2fasecret"])->remove();
    
    if($disable2fa){
        echo "Two-Factor Authentication has been disabled";
        header('location: 2fastatus.php');

    }
    else{
        echo "There was an error while disabling Two-Factor Authentication, please try again";
        header('location: 2fastatus.php');
    }
}

?>