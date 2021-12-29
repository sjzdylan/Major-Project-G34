<?php
session_start();
include('dbcon.php');

if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $emailaddress = $_POST['emailaddress'];
    $password = $_POST['password'];

    $userProperties = [
        'displayName'=>$username,
        'email'=>$emailaddress,
        'password'=>$password,

    ];

    $createdUser = $auth->createUser($userProperties);

    if($createdUser)
    {
        echo "Account has successfully been added";
        header('location: login.php');

    }
    else
    {
        echo "Account failed to be added";
        header('location: login.php');
    }
}
?>