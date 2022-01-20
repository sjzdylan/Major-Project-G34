<?php
session_start();
include('dbcon.php');
// try to implement checking of current password to change new password.

$fetchdata = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->getValue();

$dbpassword = $fetchdata['password'];
$oldpassword = strip_tags($_POST['oldpassword']);

$verify = password_verify($oldpassword, $dbpassword);

if(isset($_POST['changepassword']))
{
    
    $newpassword = strip_tags($_POST['newpassword']);
    $confirmnewpassword = strip_tags($_POST['confirmnewpassword']);

    $uid = $_SESSION['user_id'];
    
    $properties = [
        'password'=>$newpassword
    ];
    
    $updateData = [
        'password'=>$newpassword
    ];
    
    $ref_table = "userinfo/".$uid;
   

    $uppercase = preg_match('@[A-Z]@', $newpassword);
    $lowercase = preg_match('@[a-z]@', $newpassword);
    $number    = preg_match('@[0-9]@', $newpassword);
    
    if($uppercase && $lowercase && $number && strlen($newpassword) >= 6) 
    {
    
          

    if($newpassword == $confirmnewpassword)
    {
        if($verify)
        {
        
        $updatedUser = $auth->updateUser($uid, $properties);
        $updatequery_result = $database->getReference($ref_table)->update($updateData);
            if($updatedUser)
            {
                echo "Password has successfully been changed";
                unset($_SESSION['status']);
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
            $_SESSION['status'] = "Current Password entered is wrong!";
            header('location: profile.php');
        }
    }
    else
    {
        $_SESSION['status'] = "New Password and Confirm New Password is not the same";
        header('location: profile.php');
    }
    
}
else
{
    $_SESSION['status'] = "Password should be a minimum of 6 characters with at least a number, uppercase, and lowercase character.";
    header('location: profile.php');
}
}
?>