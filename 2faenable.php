<?php
session_start();
ob_start();
include('dbcon.php');
require "Authenticator.php";

if(isset($_POST['enable2fa']))
{
    $Authenticator = new Authenticator();
    $secret = $Authenticator->generateRandomSecret();


    $postData = [
        '2fasecret'=>$secret,
    ];

    $postRef_result = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->update($postData);

    if($postRef_result){
        echo "Two-Factor Authentication has been enabled, proceed onto activating it";
        header('location: 2faqr.php');

    }
    else{
        echo "There was an error while enabling Two-Factor Authentication, please try again";
        header('location: 2fastatus.php');
    }
}


?>