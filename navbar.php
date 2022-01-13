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
                background-color: #FFE200;
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
                background-color: #FFE200;
            }

        </style>


        <div style="width: 100%; background-color:#F0F0F0">
            <div style="width: 1170px; margin:auto; background-color:#F0F0F0">

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
                <a class="w3-left navbaredit" href="indexchi.php">CHINESE</a>
                <a class="w3-left navbaredit" href="login.php">MALAY</a>
                <a class="w3-left navbaredit" href="login.php">TAMIL</a>
                <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.0/jquery.fancybox.min.css" rel="stylesheet" />
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.0/jquery.fancybox.min.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.0/jquery.fancybox.min.css">
                <a data-fancybox="gallery" class="w3-left navbaredit" href="images/1.png">HOW TO USE</a>
                </ul>

            </div>
        

        </div>

        <div style="width: 100%;">
            <div style="width: 1170px; margin:auto;">
                <header class="w3-container w3-xlarge">
                    <p class="w3-left"><a href="index.php" style="text-decoration: none;">MPG34SECUREGROCERIES</a></p>
                    <p class="w3-right">
                    <a href="search.php" class="fa fa-search" style="text-decoration: none;">SEARCH</a>
                    <a href="cart.php" class="fa fa-shopping-cart w3-margin-right" style="text-decoration: none;">CART</a>
                    </p>
                </header>
            </div>
        

        </div>

        <div style="width: 100%; border-top: 1px solid #F0F0F0; border-bottom: 1px solid #F0F0F0;">
            <div style="width: 1170px; margin:auto;">

                <ul>
                    <li><a href="index.php" style="font-size: 20px;">STORE</a></li>
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