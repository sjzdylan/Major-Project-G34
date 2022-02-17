<?php
session_start();
ob_start();
if (isset($_SESSION['email'])) {

}
else{
    header("location: login.php");
}

include("dbcon.php");
include("navbar.php");
require "Authenticator.php";


$Authenticator = new Authenticator();

$fetchdata = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->getValue();

if($fetchdata['2fasecret']){
    $qrCode = $Authenticator->getQR('MPG34SecureGroceries', $fetchdata['2fasecret']);
}

if (!isset($_SESSION['failed'])){
    $_SESSION['failed']= false;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body{
            background-color: #FFBF66;
        }

        h1{
            font-size: 70px;
        }

        p{
            font-size: 30px;
        }


        
    </style>
</head>
<body  class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3"  style="background: white; padding: 20px; box-shadow: 10px 10px 5px #888888; margin-top: 100px;">
                <h1>2FA with Google Authenticator</h1>
                <p style="font-style: oblique;">Please install Google Authenticator on your mobile phone, then scan the QR code using Google Authenticator and input the 6-digit code shown on the app</p>
                <hr>
                <form action="2facheck.php" method="post">
                    <div style="text-align: center;">
                        <!-- Error Message -->
                        <?php
                        if ($_SESSION['failed']): ?>
                            <div class="alert alert-danger" role="alert">
                            <strong>Oops..</strong> Keyed in wrong code, try again.
                            </div>
                            <?php 
                            $_SESSION['failed'] = false;
                            ?>
                        <?php
                        endif
                        ?>
                            <img width="70%" style="text-align: center;" class="img-fluid" src="<?php print_r($qrCode) ?>" alt="Verify this Google Authenticator"><br><br>        
                            <input type="text" class="form-control" name="code" placeholder="******" style="font-size: xx-large; width: 300px; height: 70px; border-radius: 0px;text-align: center; display: inline;color: #0275d8;"><br> <br>    
                            <button type="submit" class="btn btn-md btn-primary" style="width: 300px; border-radius: 0px; height: 75px;">Verify</button>

                    </div>

                </form>

            </div>
        </div>
    </div>
</body>
</html>