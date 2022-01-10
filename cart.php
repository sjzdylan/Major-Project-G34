<?php
session_start();
include('dbcon.php');

if (isset($_SESSION['email'])) {
}
else{
    header("location: login.php");
}

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

                .productimage{
        height: 96px;
        width: 96px;
    }
            
        </style>
<?php
include('navbar.php');

if(isset($_GET['id']) && isset($_SESSION['user_id']))
{
    $key_child = $_GET['id'];

    $ref_table = "product";
    $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();

    if($getdata > 0)
    {
        
         $productname = $getdata['Product_Name'];
         $price = $getdata['Price'];
         $quantity = $getdata['Quantity'];
         $image = $getdata['Image'];
     
         $updateData = [
             'Product_Name'=>$productname,
             'Price'=>$price,
             'Quantity'=>$quantity,
             'Image'=>$image
     
         ];
     
         $ref_table = "cart/".$_SESSION['user_id']."/".$key_child;
         $updatequery_result = $database->getReference($ref_table)->update($updateData);
     
    }
    else
    {
        header('location: productmanagement.php');
        echo "Product does not exist";
    }
}

if(isset($_POST['removefromcart']))
{
    $key = $_POST['removefromcart'];

    $ref_table = "cart/".$_SESSION['user_id']."/".$key;
    $deletequery_result = $database->getReference($ref_table)->remove();

}
   

$ref_table1 = "cart/".$_SESSION['user_id'];
$fetchdata = $database->getReference($ref_table1)->getValue();

?>

   <br>
    <div style="width: 1170px; margin: auto;">
    <h1 class="w3-container w3-xlarge">CART</h1>
    <?php
    if($fetchdata > 0)
{
    ?>
  
  <p class="w3-container" style="color: #9b9b9b">YOU'VE GOT ITEMS IN THE CART</p>

  <?php
}
else
{
    ?>

    <p class="w3-container" style="color: #9b9b9b">YOU'VE GOT NO ITEMS IN THE CART</p>

    <?php
}
?>
    <table>

<tr>
    <td style="width: 117px; border-bottom: 1px solid #F0F0F0;">
        <p style="font-size: 12px; text-align:center;">IMAGE</p>
    </td>
    <td style="width: 451px; border-bottom: 1px solid #F0F0F0;">
        <p style="font-size: 12px; text-align:left;">PRODUCT</p>
    </td>
    <td style="width: 234px; border-bottom: 1px solid #F0F0F0;">
        <p style="font-size: 12px; text-align:left;">QUANTITY</p>
    </td>
    <td style="width: 234px; border-bottom: 1px solid #F0F0F0;">
        <p style="font-size: 12px; text-align:left;">SUBTOTAL</p>
    </td>
    <td style="width: 117px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 12px; text-align:left;">REMOVE</p>
    </td>
    
</tr>
</table>
<?php
if($fetchdata > 0)
{
    
    $i=1;
    foreach($fetchdata as $key => $row)
    {
        ?>

<table>
    <tr>
        <td style="width: 117px; border-bottom: 1px solid #F0F0F0; text-align:center;">
        <img class="productimage" src="<?=$row['Image'];?>"><img>
        </td>
        
        <td style="width: 451px; border-bottom: 1px solid #F0F0F0;">
        <p><?=$row['Product_Name'];?></p>
        </td>

        <td style="width: 234px; border-bottom: 1px solid #F0F0F0;">
        <?=$row['Quantity'];?>
        </td>

        <td style="width: 234px; border-bottom: 1px solid #F0F0F0;">
        <?=$row['Price'];?>
        </td>
        <td style="width: 117px; border-bottom: 1px solid #F0F0F0;">
        <form action="cart.php" method="post">
            <button class="loginbutton" type="submit" value="<?=$key;?>" name="removefromcart">Remove</button>
        </form>
        </td>
    </tr>

    </table>

        <?php
    }
}
else
{
    ?>
   
    <?php
}
?>

  
 
 
  
    <br>
    <table style="width:50%;">
        <tr>
            <td>
                <p>CART TOTALS</p>
            </td>
        </tr>
        <tr>
            <td style="width:30%; border-bottom: 1px solid #F0F0F0;">
                <p style="font-size: 12px; color: #9b9b9b;">SUBTOTAL</p>
            </td>
            <td style="width:20%; border-bottom: 1px solid #F0F0F0;">
                <p style="font-size: 12px; text-align:right;">$66.20</p>
            </td>
        </tr>
        <tr>
            <td style="width:30%;">
                <p style="font-size: 12px; color: #9b9b9b;">SHIPPING</p>
            </td>
            <td style="width:20%;">
                <p style="font-size: 12px; text-align:right;">SELF COLLECTION []</p>
            </td>
        </tr>
        <tr>
            <td style="width:30%; border-bottom: 1px solid #F0F0F0;">
            </td>
            <td style="width:20%; border-bottom: 1px solid #F0F0F0;">
                <p style="font-size: 12px; text-align:right;">DELIVERY []</p>
            </td>
        </tr>
        <tr>
            <td style="width:30%;">
                <p style="font-size: 12px; color: #9b9b9b;">TOTAL</p>
            </td>
            <td style="width:20%;">
                <p style="font-size: 12px; text-align:right;">$66.20</p>
            </td>
        </tr>
    </table>
    <?php 
    error_reporting(0);

    $fetchdata = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->getValue();

    if($_SESSION['carddetails'] != "")
    {

    ?>
    <form action="checkout.php" method="post">
            <button class="loginbutton" type="submit" value="<?=$key;?>" name="Checkout">Checkout</button>
    </form>
    <?php
    
    }
    else{
        ?> 
            <p style="font-size: 12px;">You do not have a payment methood associated with the account</p>
            <p style="font-size: 12px;"><a href="paymentmethod.php" class="w3-hover-opacity">Add Payment Method</a></p>
        
        <?php
    }
    ?>
    </div>
    <br>
    <br>
    <br>
    <br>
<?php
include('footer.php');
?>
    </body>
</html>