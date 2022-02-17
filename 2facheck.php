<?php
session_start();
ob_start();

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
    header("location: 2faqr.php");
    die();
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authentication Successful</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,html {
            height: 100%;
        }

        body{
            background-color: #FFBF66;
        }
        
        #p1{
            text-decoration: underline;
            font-weight: bold;
        }

    </style>
</head>
<body  class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3"  style="background: white; padding: 20px; box-shadow: 10px 10px 5px #888888; margin-top: 100px;">
                <hr>
                    <div style="text-align: center;">
                           <h1>Authentication Successful</h1>
                           <p>You have successfully enabled two-factor authentication on your account.</p>
                           <br>
                           <p id="p1"><a href="index.php" class="w3-hover-opacity">Click here to go back to the home page!</a></p>
                    </div>
                <hr>    
            </div>
        </div>
    </div>
</body>
</html>
