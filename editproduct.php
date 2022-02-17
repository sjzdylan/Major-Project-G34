<?php
session_start();
ob_start();

include("dbcon.php");
include("adminauth.php");
include("navbar.php");

?>
<html>
<style>
            .loginfields {
                border: 1px solid #F0F0F0;
                width: 493px;
                height: 34px;
                font-size: 20px;
                padding-left: 10px;
                color: #9b9b9b;
            }
            
            .loginbutton {
                background-color: black;
                color: white;
                border: none;
                cursor: pointer;
                padding: 4px 10px;
                font-size: 20px;
                border-radius: 2px;
            }
            
</style>
<body>
    <br>
    <div style="width: 1170px; margin: auto;">
    <h1 class="w3-xlarge w3-container">PRODUCT MANAGEMENT</h1>
    <p class="w3-container" style="color: black; font-size: 20px;">EDIT INFORMATION OF EXISTING PRODUCTS</p>
    </div>
    <div class="w3-container" style="width: 1170px; margin: auto;">
    <div style="height: 30px; width: 493px; border-bottom: 1px solid black;">
    <p style="font-size: 20px;">PRODUCT</p> 
        </div>
        <br>
    <?php
        if(isset($_GET['id']))
        {
            $key_child = $_GET['id'];

            $ref_table = "product";
            $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

            if($getdata > 0)
            {
                ?>
                    <form action="updateproduct.php" method="post">
                    <input type="hidden" name="key" value="<?=$key_child;?>">
                    <input class="loginfields" value="<?=$getdata['Product_Name'];?>" type="text" name="productname" required><br>
                    <br>
                    <input class="loginfields" value="<?=$getdata['Price'];?>" type="text" name="price" required><br>
                    <br>
                    <input class="loginfields" value="<?=$getdata['Quantity'];?>" type="text" name="quantity" required><br>
                    <br>
                    <input class="loginfields" value="<?=$getdata['Image'];?>" type="text" name="image" required><br>
                    <br>
                    <br>
                    <input class="loginbutton" name="updateproduct" type="submit" value="Save changes">
                    </form>
                    <br>
                    <br>
                <?php
            }
            else
            {
                header('location: productmanagement.php');
                echo "Product does not exist";
            }
        }
    ?>
   </div>
</body>
</html>
<?php

include("footer.php");

?>
