<?php
session_start();

include("dbcon.php");

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
    <p class="w3-container" style="color: black; font-size: 20px;">ADD PRODUCT</p>
    </div>
    <div class="w3-container" style="width: 1170px; margin: auto;">
    <div style="height: 30px; width: 493px; border-bottom: 1px solid black;">
    <p style="font-size: 20px;">PRODUCT</p> 
    <form action="updateproduct.php" method="post">
    
        <input class="loginfields" type="text" name="productname" id="productname" placeholder="Product Name *" required><br>
        <br>
        <input class="loginfields" type="text" name="price" placeholder="Price *" required><br>
        <br>
        <input class="loginfields" type="text" name="quantity" placeholder="Quantity *" required><br>
        <br>
        <input class="loginfields" type="text" name="image" placeholder="Image *" required><br>
        <br>
        <br>
		<input class="loginbutton" name="addproduct" type="submit" value="Add Product">
    </form>
    <br>
    <br>
</body>
</html>

<?php

include("footer.php");

?>