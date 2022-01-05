<?php
session_start();

include('dbcon.php');

echo $_POST['resetemail'];

if(isset($_POST['resetemail']))
{

$email = $_POST['resetemail'];

$resetpassword = $auth->sendPasswordResetLink($email);

if($resetpassword){
    echo "Email has been sent successfully";
}

}
else
{
    echo "Email failed to be sent";
}


?>
