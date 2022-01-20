<?php
session_start();
include('dbcon.php');

if(isset($_POST['register']))
{
    $username = strip_tags($_POST['username']);
    $emailaddress = strip_tags($_POST['emailaddress']);
    $password = strip_tags($_POST['password']);

    $userProperties = [
        'displayName'=>$username,
        'email'=>$emailaddress,
        'password'=>$password,

    ];

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);

if($uppercase && $lowercase && $number && strlen($password) >= 6) 
{

      
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
else
{
    $_SESSION['registermsg'] = "Password should be a minimum of 6 characters with at least a number, uppercase, and lowercase character.";
    header("location: login.php");
}
}
?>