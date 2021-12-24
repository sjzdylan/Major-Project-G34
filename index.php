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
            
            .filtercategory {
                display: block;
                color: #9b9b9b;
                font-size: 16px;
                padding: 8px 12px;
                text-decoration: none;
                text-align: center;
            }
            .filtercategory:hover {
                color: black;
            }
        </style>
        <?php
          include 'db_conn.php';
        ?>
        <div style="width: 100%; background-color:#F0F0F0">
            <div style="width: 1170px; margin:auto; background-color:#F0F0F0">

                <ul>
                    <i class="fa fa-twitter navbaredit w3-large w3-left"></i>
                    <i class="fa fa-instagram navbaredit w3-large w3-left"></i>
                
               
                   <a class="w3-right navbaredit" href="login.html">MY ACCOUNT</a>
                </ul>

            </div>
           

        </div>
        
        <div style="width: 100%;">
            <div style="width: 1170px; margin:auto;">
                <header class="w3-container w3-xlarge">
                    <p class="w3-left">MPG34SECUREGROCERIES</p>
                    <p class="w3-right">
                      <i class="fa fa-search"></i>
                      <a href="cart.html" class="fa fa-shopping-cart w3-margin-right" style="text-decoration: none;"></a>
                    </p>
                </header>
            </div>
           

        </div>

        <div style="width: 100%; border-top: 1px solid #F0F0F0; border-bottom: 1px solid #F0F0F0;">
            <div style="width: 1170px; margin:auto;">

                <ul>
                    <li><a href="index.php">SHOP</a></li>
                </ul>

            </div>
           

        </div>

        <div style="width: 1170px; margin: auto;">
        <br>
        <h1 class="w3-xlarge w3-container">SHOP</h1>
        <p class="w3-container" style="color: #9b9b9b">SHOWING 1 - 12 OF ??? RESULTS</p>
        <br>
            <!-- grayscale changes the image colors-->
            <div class="w3-row w3-grayscale"> 
              <div>
              <nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
                <div class="w3-container w3-display-container w3-padding-16">
                  <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
                  <h1 class="w3-xlarge">FILTER BY CATEGORY</h1>
                </div>
                <div class="w3-padding-64 w3-large w3-text-grey">
                  <a href="#" class="filtercategory w3-bar-item">Category</a>
                  <a href="#" class="filtercategory w3-bar-item">Category</a>
                  <a href="#" class="filtercategory w3-bar-item">Category</a>
                  <a href="#" class="filtercategory w3-bar-item">Category</a>
                  <a href="#" class="filtercategory w3-bar-item">Category</a>
                </div>
              </nav>
              </div>
              
                <div class="w3-col l3 s6">
                  <div class="w3-container">
                  </div>
                  <div class="w3-container">
                  </div>
                </div>
            
                <div class="w3-col l3 s6">
                  <div class="w3-container">
                    <div class="w3-display-container">
                      <img src="images\product1.jpg" style="width:100%">
                      <span class="w3-tag w3-display-topleft">New</span>
                      <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
                      </div>
                    </div>
                    <p>Product Name<br><b>$5.20</b></p>
                  </div>
                  <div class="w3-container">
                    <img src="images\product1.jpg" style="width:100%">
                    <p>Product Name<br><b>$5.20</b></p>
                  </div>
                </div>
            
                <div class="w3-col l3 s6">
                  <div class="w3-container">
                    <img src="images\product1.jpg" style="width:100%">
                    <p>Product Name<br><b>$5.20</b></p>
                  </div>
                  <div class="w3-container">
                    <div class="w3-display-container">
                      <img src="images\product1.jpg" style="width:100%">
                      <span class="w3-tag w3-display-topleft">Sale</span>
                      <div class="w3-display-middle w3-display-hover">
                        <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
                      </div>
                    </div>
                    <p>Product Name<br><b>$5.20</b></p>
                  </div>
                </div>
            
                <div class="w3-col l3 s6">
                  <div class="w3-container">
                    <img src="images\product1.jpg" style="width:100%">
                    <p>Product Name<br><b>$5.20</b></p>
                  </div>
                  <div class="w3-container">
                    <img src="images\product1.jpg" style="width:100%">
                    <p>Product Name<br><b>$5.20</b></p>
                  </div>
                </div>

                <div class="w3-col l3 s6">
                  <div class="w3-container">
                  </div>
                  <div class="w3-container">
                  </div>
                </div>

                <div class="w3-col l3 s6">
                  <div class="w3-container">
                    <img src="images\product1.jpg" style="width:100%">
                    <p>Product Name<br><b>$5.20</b></p>
                  </div>
                  <div class="w3-container">
                    <img src="images\product1.jpg" style="width:100%">
                    <p>Product Name<br><b>$5.20</b></p>
                  </div>
                </div>

                <div class="w3-col l3 s6">
                  <div class="w3-container">
                    <img src="images\product1.jpg" style="width:100%">
                    <p>Product Name<br><b>$5.20</b></p>
                  </div>
                  <div class="w3-container">
                    <img src="images\product1.jpg" style="width:100%">
                    <p>Product Name<br><b>$5.20</b></p>
                  </div>
                </div>

                <div class="w3-col l3 s6">
                  <div class="w3-container">
                    <img src="images\product1.jpg" style="width:100%">
                    <p>Product Name<br><b>$5.20</b></p>
                  </div>
                  <div class="w3-container">
                    <img src="images\product1.jpg" style="width:100%">
                    <p>Product Name<br><b>$5.20</b></p>
                  </div>
                </div>

                <div class="w3-col l3 s6">
                  <div class="w3-container">
                  </div>
                </div>
                
                <div>
                  <p> next page / previous page buttons here </p>
                </div>
            </div>
        </div>
        
       

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
                <p><a href="#" class="w3-hover-opacity">About Us</a></p>
                <p><a href="#" class="w3-hover-opacity">Shopping Guide</a></p>
                <p><a href="#" class="w3-hover-opacity">FAQs</a></p>
                <p><a href="#" class="w3-hover-opacity">Terms & Conditions</a></p>
                <p><a href="#" class="w3-hover-opacity">Privacy Policy</a></p>
              </div>
        
              <div class="w3-col s3 w3-justify">
                <h4>ACCOUNT</h4>
                <p><a href="login.html" class="w3-hover-opacity">My Account</a></p>
                <p><a href="#" class="w3-hover-opacity">Track My Order</a></p>
                <p><a href="cart.html" class="w3-hover-opacity">View Cart</a></p>
                <p><a href="#" class="w3-hover-opacity">Forgot Password</a></p>
             
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