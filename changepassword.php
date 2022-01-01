<?php
session_start();
include('dbcon.php');
// try to implement checking of current password to change new password.

$fetchdata = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->getValue();

$dbpassword = $fetchdata['password'];
$oldpassword = $_POST['oldpassword'];

if(isset($_POST['changepassword']))
{
    
    $newpassword = $_POST['newpassword'];
    $confirmnewpassword = $_POST['confirmnewpassword'];

    $uid = $_SESSION['user_id'];
    
    $properties = [
        'password'=>$newpassword
    ];
    
    $updateData = [
        'password'=>$newpassword
    ];
    
    $ref_table = "userinfo/".$uid;
   


    if($newpassword == $confirmnewpassword && $dbpassword == $oldpassword){
        $updatedUser = $auth->updateUser($uid, $properties);
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
            if($updatedUser)
            {
                echo "Password has successfully been changed";
                header('location: profile.php');

            }
            else
            {
                echo "Password failed to be changed";
                header('location: profile.php');
            }
        
    }
    else
    {
        echo "Password is not the same";
        header('location: profile.php');
    }
}
?>