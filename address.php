<?php
session_start();

include('navbar.php');

include('dbcon.php');

$fetchdata = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->getValue();

$_SESSION["address"] = $fetchdata;

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
<div class="w3-container" style="width: 1170px; margin: auto;">

    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 12px;">CURRENT ADDRESS</p> 
    </div>
    <p style="font-size: 12px;"><?php echo implode("", $_SESSION['address']); ?></p>
    <br>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 12px;">UPDATE ADDRESS</p>
    </div>
    <form action="changeaddress.php" method="post">
    <br>
    <input class="loginfields" type="text" name="newaddress" id="newaddress" placeholder="New Address *"><br>
    <br>
    <input class="loginbutton" name="changeaddress" type="submit" value="Save changes">
 
    </form>
</div>

</div>

</body>

</html>

<?php

include('footer.php');

?>