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

body{
    background-color: #FFBF66;
}

            ul {
                list-style-type: none;
                margin: 0;
                overflow: hidden;
                background-color: #FDDBAC;
                width: 100%;
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
                background-color: #FDDBAC;

            }

            li a:hover {
                background-color: #FFFFFF;
            }

            .navbaredit {
                display: block;
                color: #000000;
                text-align: center;
                padding: 8px 12px;
                text-decoration: none;
                font-size: 20px;


            }

            .navbaredit:hover {
                background-color: #FFFFFF;
            }

        </style>

    <div style="background-color: #EBA442; padding-left: 50px; fontsize: 80px; border-bottom-style: solid; text-align:center; letter-spacing: 9px;">
        <b><a style=" font-size: 40px;">MPG34SECUREGROCERIES</a></b>
        </div>


        <div style="width: 100%; background-color:#FDDBAC">
        
            <div style="width: 100%; margin:auto; background-color:#FDDBAC; border-bottom-style: solid; padding-right:40px;">
            

                <ul>
                    
                    <a class="w3-right navbaredit" href="login.php">MY ACCOUNT</a>
                    <?php
                if(isset($_SESSION['user_id']))
                {
                  ?>   <a class="w3-right navbaredit" href="logout.php">LOGOUT</a>

                  <?php
                }
                else
                {
                    
                }
                ?>
                <a class="w3-left navbaredit" href="index.php">ENGLISH</a>
                <a class="w3-left navbaredit" href="indexchi.php">CHINESE</a>
                <a class="w3-left navbaredit" href="indexmalay.php">MALAY</a>
                <a class="w3-left navbaredit" href="indextamil.php">TAMIL</a>
                <a data-fancybox="gallery" class="w3-left navbaredit" href="images/1.png">HOW TO USE</a>
            
                <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.0/jquery.fancybox.min.css" rel="stylesheet" />
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.0/jquery.fancybox.min.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.0/jquery.fancybox.min.css">
                </ul>

            </div>
        

        </div>

        <div style="width: 100%;">
            <div style="width:100%; margin:auto; float:right; font-size: 20px; border-bottom-style: solid; background-color: #FDDBAC;">
            
                <header class="w3-container w3-xlarge">
                    <p class="w3-right">
                        
                    <a href="search.php" class="fa fa-search" style="text-decoration: none; padding-right:20px;"> SEARCH </a>
                    <a style="padding-right:40px;"> </a>
                    <a href="cart.php" class="fa fa-shopping-cart w3-margin-right" style="text-decoration: none;"> CART </a>
                    </p>
                </header>
            </div>
        

        </div>

        <div style="width: 100%; border-top: 1px solid #F0F0F0; border-bottom: 1px solid #F0F0F0;">
            <div style="margin:auto;">

                <ul>
                    <?php
                         if(isset($_SESSION['verified_admin']))
                         {
                             ?>
                                    <li><a href="productmanagement.php">PRODUCTS</a></li>
                                    <li><a href="usermanagement.php">USERS</a></li>
                             <?php
                         }
                    ?>
                </ul>

            </div>
        

        </div>

    </body>

</html>