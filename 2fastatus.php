<?php
session_start();
error_reporting(0);

include('navbar.php');
include('dbcon.php');
require "Authenticator.php";

session_regenerate_id();

if (!isset($_SESSION['token']))
{
    $_SESSION['token'] = hash("sha256",uniqid(rand(), TRUE));
}

if (isset($_GET['id']) && $_GET['id'] == $_SESSION['token'])  //check if token valid
{
	$token_age = time() - $_SESSION['token_time'];   //calculate token age
	if ($token_age <= 300)  // limit validity of the token age to 5 minutes
	{
        
    }
    else{
        $_SESSION['status'] = "You have been away for too long!";
		header("location:profile.php");
	  }
}

$fetchdata = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->getValue();

$_SESSION["2fasecret"] = $fetchdata['2fasecret'];

?>

<html>
<style>
    
    .loginfields {
                border: 1px solid #F0F0F0;
                width: 493px;
                height: 34px;
                font-size: 14px;
                padding-left: 10px;
                color: #9b9b9b;
            }
            
            .loginbutton {
                background-color: black;
                color: white;
                border: none;
                cursor: pointer;
                padding: 4px 10px;
                font-size: 14px;
                border-radius: 2px;
            }
</style>
<body>

    <br>
    <div class="w3-container" style="width: 1170px; margin: auto;">
    <h1 class="w3-xlarge">TWO-FACTOR AUTHENTICATION</h1>
    <p style="color: #9b9b9b;">ENABLE TWO-FACTOR AUTHENTICATION TO SECURE YOUR ACCOUNT</p>
    <br>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 12px;">CURRENT STATUS</p> 
    </div>
    <?php
    if($_SESSION['2fasecret'] != '')
    {
        ?> 
        <p style="font-size: 12px;">Two-Factor Authentication is enabled! </p>

        <?php
    }
    else{
        ?> 
        <p style="font-size: 12px;">Two-Factor Authentication is currently not enabled!</p>
        
        <?php
    }
    ?>
    <br>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 12px;">ENABLE TWO-FACTOR AUTHENTICATION</p>
    </div>
    <form action="2faenable.php" method="post">
    <br>
    <input class="loginbutton" name="enable2fa" type="submit" value="Activate 2FA!">
 
    </form>
    </div>
    <br>
    <br>

</div>

</body>

</html>

<?php

include('footer.php');

?>