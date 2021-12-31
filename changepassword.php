<?php
session_start();
include('dbcon.php');
// try to implement checking of current password to change new password.
if(isset($_POST['changepassword']))
{
    
    $newpassword = $_POST['newpassword'];
    $confirmnewpassword = $_POST['confirmnewpassword'];

    $uid = $_SESSION['user_id'];
    
    $properties = [
        'password'=>$newpassword
    ];
    
    if($newpassword == $confirmnewpassword){
        $updatedUser = $auth->updateUser($uid, $properties);

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