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
<style>
.textsize {

  font-size: 20px;

}
</style>
    <body>

    <div style="width: 1170px; margin: auto;">
        <footer class="w3-padding-64 w3-small w3-center" id="footer">
            <div class="w3-row-padding">

              <div class="w3-col s3 w3-justify" style='margin-left:10%; margin-right:10%;'>
                <p class="textsize">PAYMENT</p>
                <p><i class="fa fa-fw fa-credit-card textsize"></i> Credit Card</p>
                <img src="images\paymentimg.png">
               
              </div>
        
              <div class="w3-col s3 w3-justify textsize">
                <p  class="textsize">MPG34SECUREGROCERIES</p>
                <p><a href="aboutus.php" class="w3-hover-opacity">About Us</a></p>
                <p><a href="#" class="w3-hover-opacity">Shopping Guide</a></p>
                <p><a href="#" class="w3-hover-opacity">FAQs</a></p>
                <p><a href="#" class="w3-hover-opacity">Informatics</a></p>
              </div>
        
              <div class="w3-col s3 w3-justify textsize">
                <p  class="textsize">ACCOUNT</p>
                <p><a href="login.php" class="w3-hover-opacity">My Account</a></p>
                <p><a href="cart.php" class="w3-hover-opacity">View Cart</a></p>
                <?php
                if(isset($_SESSION['user_id']))
                {
                  ?>  <p><a href="logout.php" class="w3-hover-opacity">Logout</a></p>

                  <?php
                }
                else
                {
                  ?>  <p><a href="forgetpasswordform.php" class="w3-hover-opacity">Forgot Password</a></p>

                  <?php
                }
                ?>
               
               

                <br>
                <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
                <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
              </div>
            </div>
        </footer>
        </div>
        <div style="width: 1170px; margin: auto;">
          <p  class="textsize">MPG34SECUREGROCERIES</p>
        </div>
    </body>
</html>