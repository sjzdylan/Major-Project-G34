<?php
session_start();
ob_start();

include('dbcon.php');

if(isset($_POST['resetemail']))
{

$email = $_POST['resetemail'];

$resetpassword = $auth->sendPasswordResetLink($email);
echo "your mom";
if($resetpassword){
    echo "Email has been sent successfully";
    header("location: login.php");
}
else
{
    echo "Email failed to be sent";
    header("location: login.php");
}

}


?>
