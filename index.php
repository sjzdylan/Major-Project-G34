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
include('navbar.php');
?>

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
<?php
include('footer.php');
?>
    </body>
</html>