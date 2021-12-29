<?php
session_start();
include('dbcon.php');

if(isset($_POST['changepassword']))
{
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];

    $uid = $_SESSION['user_id'];
    
    $properties = [
        'password'=>$newpassword
    ];
    
    $updatedUser = $auth->updateUser($uid, $properties);

    if($updatedUser)
    {
        echo "Password has successfully been changed";
        header('location: login.php');

    }
    else
    {
        echo "Password failed to be changed";
        header('location: login.php');
    }
}
?>

?>