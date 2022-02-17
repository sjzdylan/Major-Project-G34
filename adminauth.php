<?php
ob_start();
include('dbcon.php');
use Firebase\Auth\Token\Exception\InvalidToken;

if(isset($_SESSION['user_id']))
{
    if(isset($_SESSION['verified_admin']))
    {

    $uid = $_SESSION['user_id'];
    $idTokenString = $_SESSION['idTokenString'];
    try {

        $verifiedIdToken = $auth->verifyIdToken($idTokenString);
        $uid = $verifiedIdToken->claims()->get('sub');
       
    } catch (InvalidToken $e) {
        echo 'The token is invalid: '.$e->getMessage();
        header('location: logout.php');
        exit();
    } catch (\InvalidArgumentException $e) {
        echo 'The token could not be parsed: '.$e->getMessage();
        header('location: logout.php');
        exit();
    }

}
    
    else
    {
        echo "You do not have authorized access to this page";
        header("location: index.php");
    }
}
else{
    header("location: index.php");
}


?>
