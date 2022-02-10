<?php 
session_start();

include("dbcon.php");
include('chinavbar.php');
   
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

body{
            background-color: #FFBF66;
            }
            *{
                box-sizing: border-box;
            }

            .productimage{
                height: 300px;
                width: 292.5px;
            }

            .card1{
                transition: 0.5s;
                height: 600px;
                width: 292.5px;
            }
            .card1:hover{
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
            .container1{
                padding: 2px 16px;
                
            }
            .searchbutton {
                background-color: black;
                color: white;
                border: none;
                cursor: pointer;
                padding: 4px 10px;
                font-size: 14px;
                border-radius: 2px;
                height: 45px;
                
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

            .box{
                width:100%;
                text-align: center;
            }

            #Search {
                margin: 1 auto;
                display: inline-block;
                width: 800px;
                height: 50px;
            }

            .box input[type=text]{
                border: 1px solid #ccc;
            }
            
        </style>

    <br>
    <div class="w3-container" style="width: 1170px; margin: auto;">
    <h1 style="font-size:30px;">搜索</h1>
    <p style="color: #000000; font-size: 20px;">您可能正在寻找的产品</p>
    <br>
    <div class="box">
        <form action ="chisearched.php" method="get">
            <input class="searchfield" type="text" id="Search" name="Search" placeholder="您可能正在寻找的产品" />
            <input class="submitbutton loginbutton" type="submit" name="searched" value="搜索!" />
        </form>
    </div>

    <br>
    <br>

    <br>
    <br>
    
    <?php
        if(isset($_GET['searched']))
        {
            $itemsearched = $_GET['Search'];
            $lower = strtolower($itemsearched);
            $upper = ucfirst($lower);
            $_SESSION['querieditem'] = $upper;
            $queryfound = $database->getReference('product')->orderbyChild('Product_Name')->startAt($_SESSION['querieditem'])->endAt($_SESSION['querieditem']."uf8ff")->getValue();
            if($queryfound != NULL)
            {
                foreach($queryfound as $key => $row)
                {
    ?>      
                <div class="card1 w3-col l3 s6">
                <tr style="font-size: 20px">
                <td><img class="productimage" src="<?=$row['Image'];?>"><img></td>
                <div class="container1">
                    <td><p style="text-align:center; font-size: 30px;"><?=$row['Product_Name'];?></p></td>
                <td><p style="text-align:center; font-size: 20px;"><?=$row['Price'];?></p></td>
                </div>
                <br><br>
                <div style="text-align: center;">
                <form action="cart.php" method="post">

                <a style="text-decoration: none; font-size: 20px;" href="cart.php?id=<?=$key; ?>" class="loginbutton" name="addtocart" type="submit">加入购物车</a>
                </form>
                </div>
                </div>
                       
                    <?php
                }
                
            }
            else
            {
                echo "No search results";
            }
        }
        
        ?>
    </div>
    </body>
    <br>
    <br>
</html>
<?php
    include('footerchi.php');
?>
