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

body{
    background-color: #FFBF66;
}
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
include('chinavbar.php');

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
        echo "产品不存在        ";
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
    <div style="width: 1170px; margin: auto; font-size: 30px;">
    <h1 style="margin-left: 15px;">购物车</h1>
    <?php
    if($fetchdata > 0)
{
    ?>
  
  <p class="w3-container" style="color: #000000; font-size: 20px;">你的购物车里有产品</p>

  <?php
}
else
{
    ?>

    <p class="w3-container" style="color: #000000; font-size: 20px;">你的购物车里没有产品</p>

    <?php
}
?>
    <table>

<tr>
    <td style="width: 117px; border-bottom: 1px solid #F0F0F0;">
        <p style="font-size: 20px; text-align:center;">图片</p>
    </td>
    <td style="width: 451px; border-bottom: 1px solid #F0F0F0;">
        <p style="font-size: 20px; text-align:left;">产品</p>
    </td>
    <td style="width: 234px; border-bottom: 1px solid #F0F0F0;">
        <p style="font-size: 20px; text-align:left;">总共价钱</p>
    </td>
    <td style="width: 234px; border-bottom: 1px solid #F0F0F0;">
        <p style="font-size: 20px; text-align:left;">数量</p>
    </td>
    <td style="width: 117px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 20px; text-align:left;">拆除</p>
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
        <td style="width: 117px; border-bottom: 1px solid black; text-align:center;">
        <img class="productimage" src="<?=$row['Image'];?>"><img>
        </td>
        
        <td style="width: 451px; border-bottom: 1px solid black;">
        <p><?=$row['Product_Name'];?></p>
        </td>

        <td style="width: 234px; border-bottom: 1px solid black;">
        <?=$row['Price'];?>
        </td>
        
        <td style="width: 351px; border-bottom: 1px solid black; ">
        <form action="cart.php" method="post">
            <button class="loginbutton" type="submit" value="<?=$key;?>" name="removefromcart" style="float: right; margin-top:18px; margin-right: 30px;" >拆除</button>
        </form>
        
        <form action="checkout.php?id=<?=$key; ?>" method="post">
     
        <input type="number" id="quantity" name="quantity" min="1" max="10000" value="1" required style="float: left; margin-top:8px;"> 
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
    <?php 
    error_reporting(0);

    if($_SESSION['carddetails'] != "")
    {

        if($fetchdata > 0){
    ?>
    <br>

    <input class="loginbutton" name="checkout" type="submit" value="查看">
    </form>
    </form>
    <?php
        }
    
    }
    else{
        ?> 
            <p style="font-size: 20px;">您没有与该帐户关联的付款方式</p>
            <p style="font-size: 20px;"><a href="paymentmethod.php" class="w3-hover-opacity">添加付款方式</a></p>

            <?php
            if($_SESSION['address'] != ""){
            
            ?>    
            <p style="font-size: 20px;">或者</p>
            <p style="font-size: 20px;">货到付款</p>
            <a style="text-decoration: none;" href="checkout.php?id=<?=$key; ?>" class="loginbutton" name="checkout" type="submit">查看</a>
            <?php
            }
            else{
                ?>
            <p style="font-size: 20px;">您没有与该帐户关联的地址</p>
            <p style="font-size: 20px;"><a href="address.php" class="w3-hover-opacity">添加地址</a></p>
        <?php   
        }
           
        ?>
        <?php
    }
    ?>
    </div>
    <br>
    <br>
    <br>
    <br>
<?php
include('footerchi.php');
?>
    </body>
</html>