<?php
session_start();

include('dbcon.php');

include('navbar.php');

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
<div class="w3-container" style="width: 1170px; margin: auto;">
<h1 class="w3-xlarge">FORGOT YOUR PASSWORD?</h1>
<p style="color: #9b9b9b;">RESET PASSWORD THROUGH EMAIL</p>
<div style="height: 20px; width: 493px; border-bottom: 1px solid #F0F0F0;">
<p style="font-size: 12px;">EMAIL</p> 
</div>
<br>
<form action="forgetpassword.php" method="post">
<input class="loginfields" type="text" name="resetemail" placeholder="Email *" required>
<i class="fa fa-eye" id="togglePassword3" style="margin-left: -30px; cursor: pointer;"></i>
<br>
<br>
<input class="loginbutton" name="forgetpassword" type="submit" value="Save changes">
</form>

</div>

<br>
<br>
</body>
</html>

<?php

include('footer.php');

?>