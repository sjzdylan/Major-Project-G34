<?php
session_start();
include('dbcon.php');
require "Authenticator.php";

$fetchdata = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->getValue();

if (isset($fetchdata['2fasecret'])) {
    header('location: 2falogin.php');
}
else{
    header('location: index.php');
}


?>