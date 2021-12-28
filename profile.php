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
    <div class="w3-container" style="width: 1170px; margin: auto;">
    <h1 class="w3-xlarge">MY ACCOUNT</h1>
    <p style="color: #9b9b9b;">EDIT ACCOUNT DETAILS</p>
    <br>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
        <p style="font-size: 12px;">USERNAME</p> 
    </div>
    <p style="font-size: 12px;">user account name</p>
    <br>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 12px;">BILLING INFORMATION</p> 
    </div>
    <p style="font-size: 12px;">card details</p> 
    <br>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 12px;">ADDRESS</p> 
    </div>
    <p style="font-size: 12px;">address details</p> 
    <br>
    <div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 12px;">PASSWORD CHANGE</p> 
    </div>
    <br>
    <form action="#" method="post">

    <input class="loginfields" type="password" name="oldpassword" id="oldpassword" placeholder="Current Password *"><br>
    <br>
    <input class="loginfields" type="password" name="newpassword" id="newpassword" placeholder="New Password *"><br>
    <br>
    <input class="loginfields" type="password" name="newpassword" id="newpassword" placeholder="Confirm New Password *"><br>
    <br>
    <input class="loginbutton" type="submit" value="Save changes">
 
    </form>
    
    </div>

    </div>
    <br>
    <br>
<?php
    include('footer.php');
?>
    </body>
</html>