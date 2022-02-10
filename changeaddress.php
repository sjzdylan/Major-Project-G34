<?php
session_start();
include('dbcon.php');
ob_start();

if(isset($_POST['changeaddress']))
{
    $newaddress = strip_tags($_POST['newaddress']);
    $uid = $_SESSION['user_id'];

   

    $postData = [
        'address'=>$newaddress,
    ];
    
    $postRef_result = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->update($postData);

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