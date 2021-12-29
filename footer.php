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

    <div style="width: 1170px; margin: auto;">
        <footer class="w3-padding-64 w3-white w3-small w3-center" id="footer" style="border-top: 1px solid #F0F0F0; border-bottom: 1px solid #F0F0F0;">
            <div class="w3-row-padding">

              <div class="w3-col s3 w3-justify" style='margin-left:10%; margin-right:10%;'>
                <h4>PAYMENT</h4>
                <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
                <img src="images\paymentimg.png">
               
              </div>
        
              <div class="w3-col s3 w3-justify">
                <h4>MPG34SECUREGROCERIES</h4>
                <p><a href="aboutus.php" class="w3-hover-opacity">About Us</a></p>
                <p><a href="#" class="w3-hover-opacity">Shopping Guide</a></p>
                <p><a href="#" class="w3-hover-opacity">FAQs</a></p>
                <p><a href="#" class="w3-hover-opacity">Terms & Conditions</a></p>
                <p><a href="#" class="w3-hover-opacity">Privacy Policy</a></p>
              </div>
        
              <div class="w3-col s3 w3-justify">
                <h4>ACCOUNT</h4>
                <p><a href="login.php" class="w3-hover-opacity">My Account</a></p>
                <p><a href="#" class="w3-hover-opacity">Track My Order</a></p>
                <p><a href="cart.php" class="w3-hover-opacity">View Cart</a></p>
                <?php
                if(isset($_SESSION['user_id']))
                {
                  ?>  <p><a href="logout.php" class="w3-hover-opacity">Logout</a></p>

                  <?php
                }
                else
                {
                  ?>  <p><a href="#" class="w3-hover-opacity">Forgot Password</a></p>

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
          <p>MPG34SECUREGROCERIES</p>
        </div>
    </body>
</html>