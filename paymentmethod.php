<?php
session_start();
error_reporting(0);

include('navbar.php');

include('dbcon.php');

$fetchdata = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->getValue();

$_SESSION["carddetails"] = substr_replace($fetchdata['carddetails'], str_repeat("X", 8), 4, 8);

if(isset($_POST['carddetails']) && isset($_POST['securitycode']) && isset($_POST['expirydate']))
{
    $carddetails = strip_tags($_POST['carddetails']);
    $securitycode = strip_tags($_POST['securitycode']);
    $expirydate = strip_tags($_POST['expirydate']);

   // $hashedcardnumber = password_hash($carddetails, PASSWORD_DEFAULT);
   // $hashedsecuritycode = password_hash($securitycode, PASSWORD_DEFAULT);
   // $hashedexpirydate = password_hash($expirydate, PASSWORD_DEFAULT);
    $mastercard = preg_match("/^5[1-5][0-9]{14}$/", $carddetails);
    $visacard = preg_match("/^4[0-9]{12}(?:[0-9]{3})?$/", $carddetails);
    $securityregex = preg_match("/^[0-9]{3}$/", $securitycode);
    $expiryregex = preg_match("/^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$/", $expirydate);

    if(($mastercard || $visacard) && $securityregex && $expiryregex)
    {
    $postData = [
        'carddetails'=>$carddetails,
        'securitycode'=>$securitycode,
        'expirydate'=>$expirydate
    ];
    
    $postRef_result = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->update($postData);

    if($postRef_result)
    {
        echo "Payment information has been successfully updated";
        header('location: profile.php');
        $_SESSION['billingmsg'] = "";
    }
    else
    {
        echo "Payment information failed to be updated";
        header('location: profile.php');
    }
}
else{
    $_SESSION['billingmsg'] = "Billing information is invalid.";
}
}


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
    
    .creditcard {
        border: 1px solid #F0F0F0;
        width: 150px;
        height: 34px;
        font-size: 14px;
        padding-left: 10px;
        color: #9b9b9b;
    }

</style>
<body>

    <br>
    <div class="w3-container" style="width: 1170px; margin: auto;">
    <h1 class="w3-xlarge">PAYMENT</h1>
    <p style="color: #9b9b9b;">BILLING METHOD FOR ORDERS</p>
    <?php
    if(isset($_SESSION['billingmsg']))
    { 
        ?>
    <p style="font-size: 14px; color: red; font-weight: bold;"><?php echo $_SESSION['billingmsg']; ?></p>
    <?php
    }
    else
    {
        ?>
        <br>
    <?php
    }    
    ?>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 12px;">CURRENT BILLING INFORMATION</p> 
    </div>
    <p style="font-size: 12px;"><?php echo $_SESSION['carddetails']; ?></p>
    <br>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 12px;">UPDATE BILLING INFORMATION</p>
    </div>
    <form action="paymentmethod.php" method="post">
    <br>
    <input class="loginfields" type="text" name="carddetails" id="carddetails" placeholder="Credit Card Number *"><br>
    <br>
    <input class="creditcard" type="text" name="securitycode" id="securitycode" placeholder="Security Code *"><br>
    <br>
    <input class="creditcard" type="text" name="expirydate" id="expirydate" placeholder="Expiry Date*"><br>
    <br>
    <input class="loginbutton" type="submit" value="Save changes">
    </form>
    </div>
    <br>
    <br>

</div>

</body>

</html>

<?php

include('footer.php');
unset($_SESSION['billingmsg']);
?>