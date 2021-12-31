<?php
session_start();

include ("dbcon.php");

include("navbar.php");


?>
<html>
<style>
    
    .loginfields {
                border: 1px solid #F0F0F0;
                width: 493px;
                height: 34px;
                font-size: 14px;
                padding-left: 10px;
                color: #9b9b9b;
            }
            
            .loginbutton {
                background-color: black;
                color: white;
                border: none;
                cursor: pointer;
                padding: 4px 10px;
                font-size: 14px;
                border-radius: 2px;
            }
</style>
<body>
<br>
    <div style="width: 1170px; margin: auto;">
    <h1 class="w3-container w3-xlarge">USER MANAGEMENT</h1>
    <p class="w3-container" style="color: #9b9b9b">EDIT INFORMATION OF EXISTING USERS</p>

    <form action="updateuser.php" method="post">

    <?php
    if(isset($_GET['id']))
    {
        $uid = $_GET['id'];

        try {
            $user = $auth->getUser($uid);
            ?>  
                <input type="hidden" name="user_id" value="<?=$user->uid;?>">
                <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
                <p style="font-size: 12px;">USERNAME</p> 
                <input class="loginfields" name="username" type="text" value="<?=$user->displayName;?>"><br>
                <br>
                <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
                <p style="font-size: 12px;">EMAIL</p> 
                <input class="loginfields" name="email" type="text" value="<?=$user->email;?>"><br>
                <br>
                <input class="loginbutton" name="updateuser" type="submit" value="Save changes">
                <br>
                <br>
            <?php
        }
            catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e)
            {
                echo $e->getMessage();
            }
    }
      
    ?>
    
    </form>
    </table>
    <br>

    </body>
</html>

<?php
include('footer.php');
?>
