<?php
session_start();
if (isset($_SESSION['email'])) {

}
else{
    header("location: login.php");
}

include('dbcon.php');
require "Authenticator.php";

$Authenticator = new Authenticator();

$fetchdata = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->getValue();

$checkResult = $Authenticator->verifyCode($fetchdata['2fasecret'], $_POST['code'], 1);    // 1 = 1*30sec clock tolerance

if (!$checkResult) {
    $_SESSION['failed'] = true;
    header("location: 2falogin.php");
    die();
}
else{
    header("location: index.php");
    die();
}
?>
