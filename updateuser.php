<?php
session_start();

include('dbcon.php');

if(isset($_POST['deleteuser']))
{
    $uid = $_POST['deleteuser'];

    try{
        $auth->deleteUser($uid);

        $ref_table = "userinfo/".$uid;
        $deletequery_result = $database->getReference($ref_table)->remove();

        echo "User has been deleted successfully";
        header('location: usermanagement.php');
    }
    catch(Exception $e){

        echo "User does not exist";
        header('location: usermanagement.php');
    }
}

if(isset($_POST['updateuser']))
{
    $displayname = $_POST['username'];
    $email = $_POST['email'];
   

    $uid = $_POST['user_id'];
    $properties = [
        'displayName'=>$displayname,
        'email' => $email,
      
    ];

    $updatedUser = $auth->updateUser($uid, $properties);

    if($updatedUser)
    {
        echo "User has been updated successfully";
        header('location: usermanagement.php');
    }
    else
    {
        echo "User has failed to update";
        header('location: usermanagement.php');
    }
}


?>