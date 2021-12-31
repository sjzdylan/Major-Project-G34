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
    </div>
    <div class="w3-container" style="width: 1170px; margin: auto;">
    <h4>LOGIN</h4>
    <form action="log_in.php" method="post">
    
        <input class="loginfields" type="text" name="emailaddress" id="emailaddress" placeholder="Email address *" required><br>
        <br>
        <input class="loginfields" type="password" name="password" id="password" placeholder="Password *" required><br>
        <br>
		<input class="loginbutton" name="log_in"type="submit" value="Log in">
    </form>
    <br>
    <a href="#" class="w3-hover-opacity">Lost your password?</a>
    <br><br>
    <h4>REGISTER</h4>
    <form action="register.php" method="post">
    
        <input class="loginfields" type="text" name="username" id="username" placeholder="Username *" required><br>
        <br>
        <input class="loginfields" type="text" name="emailaddress" id="emailaddress" placeholder="Email address *" required><br>
        <br>
        <input class="loginfields" type="password" name="password" id="password" placeholder="Password *" required><br>
        <br>
		<input class="loginbutton" name="register" type="submit" value="Register">
    </form>
    </div>
    <br>
    <br>
<?php
include('footer.php');
?>
    </body>
</html>