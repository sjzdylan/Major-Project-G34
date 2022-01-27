<?php
session_start();
error_reporting(0);

include('navbar.php');

include('dbcon.php');

$fetchdata = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->getValue();

$_SESSION["address"] = $fetchdata['address'];

?>

<html>
<style>
    
    .loginfields {
                border: 1px solid #F0F0F0;
                width: 493px;
                height: 34px;
                font-size: 20px;
                padding-left: 10px;
                color: #9b9b9b;
            }
            
            .loginbutton {
                background-color: black;
                color: white;
                border: none;
                cursor: pointer;
                padding: 4px 10px;
                font-size: 20px;
                border-radius: 2px;
            }
</style>
<body>

    <br>
    <div class="w3-container" style="width: 1170px; margin: auto;">
    <h1 class="w3-xlarge">ADDRESS</h1>
    <p style="color: #9b9b9b; font-size: 20px;">YOUR ADDRESS IS WHERE YOUR ORDER WILL BE DELIVERED TO</p>
    <br>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 20px;">CURRENT ADDRESS</p> 
    </div>
    <p style="font-size: 20px;"><?php echo $_SESSION['address']; ?></p>
    <br>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 20px;">UPDATE ADDRESS</p>
    </div>
    <form action="changeaddress.php" method="post">
    <br>
    <input class="loginfields" type="text" name="newaddress" id="newaddress" placeholder="New Address *"><br>
    <br>
    <input class="loginbutton" name="changeaddress" type="submit" value="Save changes">
 
    </form>
    </div>
    <br>
    <br>

</div>

</body>

</html>

<?php

include('footer.php');

?>