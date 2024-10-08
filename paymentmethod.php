<?php
session_start();
error_reporting(0);

ob_start();

include('navbar.php');

include('dbcon.php');

session_regenerate_id();

if (!isset($_SESSION['token']))
{
    $_SESSION['token'] = hash("sha256",uniqid(rand(), TRUE));
}

if (isset($_GET['id']) && $_GET['id'] == $_SESSION['token'])  //check if token valid
{
	$token_age = time() - $_SESSION['token_time'];   //calculate token age
	if ($token_age <= 300)  // limit validity of the token age to 5 minutes
	{
        
    }
    else{
        $_SESSION['status'] = "You have been away for too long!";
		header("location: profile.php");
	  }
}

$fetchdata = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->getValue();

if($fetchdata['carddetails']){

$_SESSION["carddetails"] = substr_replace($fetchdata['carddetails'], str_repeat("X", 8), 4, 8);

}
if(isset($_POST['carddetails']) && isset($_POST['securitycode']) && isset($_POST['expirydate']))
{
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '1234567891011121';
    $encryption_key = 'MPG34';

    $carddetails = strip_tags($_POST['carddetails']);
    $securitycode = strip_tags($_POST['securitycode']);
    $expirydate = strip_tags($_POST['expirydate']);

    $encryptedcarddetails = openssl_encrypt($carddetails, $ciphering, $encryption_key, $options, $encryption_iv);
    $encryptedsecuritycode = openssl_encrypt($securitycode, $ciphering, $encryption_key, $options, $encryption_iv);
    $encryptedexpirydate = openssl_encrypt($expirydate, $ciphering, $encryption_key, $options, $encryption_iv);
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
        'carddetails'=>$encryptedcarddetails,
        'securitycode'=>$encryptedsecuritycode,
        'expirydate'=>$encryptedexpirydate
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
                font-size: 14px;
                border-radius: 2px;
     	}
    
   	.creditcard {
        	border: 1px solid #F0F0F0;
        	width: 200px;
        	height: 34px;
        	font-size: 20px;
        	padding-left: 10px;
        	color: #9b9b9b;
    	}

	body{
        	background-color: #FFBF66;
    	}
</style>
<body>

    <br>
    <div class="w3-container" style="width: 1170px; margin: auto;">
    <h1 class="w3-xlarge">PAYMENT</h1>
    <p style="color: black; font-size: 20px;">BILLING METHOD FOR ORDERS</p>
    <?php
    if(isset($_SESSION['billingmsg']))
    { 
        echo $token;
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
    <div style="height: 30px; width: 493px; border-bottom: 1px solid black;">
    <p style="font-size: 20px;">CURRENT BILLING INFORMATION</p> 
    </div>
    <p style="font-size: 20px;"><?php echo $_SESSION['carddetails']; ?></p>
    <br>
    <div style="height: 30px; width: 493px; border-bottom: 1px solid black;">
    <p style="font-size: 20px;">UPDATE BILLING INFORMATION</p>
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
