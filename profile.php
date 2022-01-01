<?php
session_start();

include('dbcon.php');

error_reporting(0);

$fetchdata = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->getValue();
$_SESSION["address"] = $fetchdata['address'];

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Webpage Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        
        <style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: black;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;


            }

            li a:hover {
                background-color: #F0F0F0;
            }

            .navbaredit {
                display: block;
                color: #9b9b9b;
                text-align: center;
                padding: 8px 12px;
                text-decoration: none;
                font-size: 12px;


            }

            .navbaredit:hover {
                color: black;
            }

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

<?php
include('navbar.php');
error_reporting(0);
?> 
    <br>
    <div class="w3-container" style="width: 1170px; margin: auto;">
    <h1 class="w3-xlarge">MY ACCOUNT</h1>
    <p style="color: #9b9b9b;">EDIT ACCOUNT DETAILS</p>
    <br>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
        <p style="font-size: 12px;">USERNAME</p> 
    </div>
    <p style="font-size: 12px;"> <?php echo $_SESSION['email']; ?></p>
    <br>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 12px;">BILLING INFORMATION</p> 
    </div>
    <?php
    if($_SESSION['carddetails'] != '')
    {
        ?> <p style="font-size: 12px;"><?php echo $_SESSION['carddetails']; ?></p> 
        
        <?php
    }
    else{
        ?> <p style="font-size: 12px;">You do not have a payment methood associated with the account</p>
            <p style="font-size: 12px;"><a href="paymentmethod.php" class="w3-hover-opacity">Add Payment Method</a></p>
        
        <?php
    }
    ?>
    <br>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 12px;">ADDRESS</p> 
    </div>
    <?php
    if($_SESSION['address'] != '')
    {
        ?> <p style="font-size: 12px;"><?php echo $_SESSION['address']; ?></p> 
            <p style="font-size: 12px;"><a href="address.php" class="w3-hover-opacity">Update Address</a></p>

        <?php
    }
    else{
        ?> <p style="font-size: 12px;">You do not have an address associated with the account</p>
            <p style="font-size: 12px;"><a href="address.php" class="w3-hover-opacity">Add Address</a></p>
        
        <?php
    }
    ?>
    <br>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 12px;">ORDER HISTORY</p> 
    </div>
    <?php
    if($_SESSION['orderhistory'] != '')
    {
        ?> 
            <p style="font-size: 12px;"><a href="orderhistory.php" class="w3-hover-opacity">View Order History</a></p>

        <?php
    }
    else{
        ?> 
            <p style="font-size: 12px;">You have not made any purchases on your account before</p>
        
        <?php
    }
    ?>
    
    <br>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 12px;">PASSWORD CHANGE</p> 
    </div>
    <br>
    <form action="changepassword.php" method="post">

    <input class="loginfields" type="password" name="oldpassword" id="password1" placeholder="Current Password *" minlength="6" required>
    <i class="fa fa-eye" id="togglePassword1" style="margin-left: -30px; cursor: pointer;"></i>
    <br>
    <br>
    <input class="loginfields" type="password" name="newpassword" id="password2" placeholder="New Password *" minlength="6" required>
    <i class="fa fa-eye" id="togglePassword2" style="margin-left: -30px; cursor: pointer;"></i>
    <br>
    <br>
    <input class="loginfields" type="password" name="confirmnewpassword" id="password3" placeholder="Confirm New Password *" minlength="6" required>
    <i class="fa fa-eye" id="togglePassword3" style="margin-left: -30px; cursor: pointer;"></i>
    <br>
    <br>
    <input class="loginbutton" name="changepassword" type="submit" value="Save changes">
    </form>
    
    </div>

    </div>
    <br>
    <br>

<script>
const togglePassword1 = document.querySelector('#togglePassword1');
const password1 = document.querySelector('#password1');
 
  togglePassword1.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
    password1.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

const togglePassword2 = document.querySelector('#togglePassword2');
const password2 = document.querySelector('#password2');
 
  togglePassword2.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

const togglePassword3 = document.querySelector('#togglePassword3');
const password3 = document.querySelector('#password3');
 
  togglePassword3.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password3.getAttribute('type') === 'password' ? 'text' : 'password';
    password3.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>

<?php
    include('footer.php');
?>
    </body>
</html>