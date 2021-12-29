<?php
session_start();
include('dbcon.php');

if(isset($_POST['changeaddress']))
{
    $newaddress = $_POST['newaddress'];
    $uid = $_SESSION['user_id'];

   

    $postData = [
        'address'=>$newaddress,
    ];
    
    $database->getReference('userinfo')->getChild($_SESSION['user_id'])->set($postData);

    if($postRef_result)
    {
        echo "Address has successfully been updated";
        header('location: profile.php');

    }
    else
    {
        echo "Address failed to be updated";
        header('location: profile.php');
    }
}


?>