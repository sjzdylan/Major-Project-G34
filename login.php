<?php
session_start();
if (isset($_SESSION['email'])) {
    header("location: profile.php");
}
else{

}

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
?>
   
    <br>
    <div style="width: 1170px; margin: auto;">
    <h1 class="w3-xlarge w3-container">MY ACCOUNT</h1>
    <p class="w3-container" style="color: #9b9b9b">ACCOUNT LOGIN/REGISTER</p>
    <?php 
    if(isset($_SESSION['registermsg']))
    {
        ?>
            <p class="w3-container" style="font-size: 14px; font-weight: bold; color: red;"><?php echo $_SESSION['registermsg'];?></p>
        <?php
    }
    else{
        ?>

        <?php
    }
    
    ?>
    </div>
 
    <div class="w3-container" style="width: 1170px; margin: auto;">
    <h4>LOGIN</h4>
    <form action="log_in.php" method="post">
        <input class="loginfields" type="email" name="emailaddress" id="emailaddress" placeholder="Email address *" required><br>
        <br>
        <input class="loginfields" type="password" name="password" id="password1" placeholder="Password *" required>
        <i class="fa fa-eye" id="togglePassword1" style="margin-left: -30px; cursor: pointer;"></i>
        <br>
        <br>
		<input class="loginbutton" name="log_in"type="submit" value="Log in">
    </form>
    <br>
    <a href="forgetpasswordform.php" class="w3-hover-opacity">Lost your password?</a>
    <br><br>
    <h4>REGISTER</h4>
    <form action="register.php" method="post">
    
        <input class="loginfields" type="text" name="username" id="username" placeholder="Username *" required><br>
        <br>
        <input class="loginfields" type="email" name="emailaddress" id="emailaddress" placeholder="Email address *" required><br>
        <br>
        <input class="loginfields" type="password" name="password" id="password2" placeholder="Password *" minlength="6" required>
        <i class="fa fa-eye" id="togglePassword2" style="margin-left: -30px; cursor: pointer;"></i>
        <br>
        <br>
		<input class="loginbutton" name="register" type="submit" value="Register">
    </form>
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
</script>

<?php
include('footer.php');
unset($_SESSION['registermsg']);
?>
    </body>
</html>