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
include('malaynavbar.php');

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
    <div style="width: 1170px; margin: auto; font-size: 30px;">
    <h1 style="margin-left: 15px;">KERETA</h1>
    <?php
    if($fetchdata > 0)
{
    ?>
  
  <p class="w3-container" style="color: #000000; font-size: 20px;">ANDA DAH DAPAT ITEM DALAM CARTA</p>

  <?php
}
else
{
    ?>

    <p class="w3-container" style="color: #000000; font-size: 20px;">ANDA TIDAK DAPAT ITEM DALAM CARTA</p>

    <?php
}
?>
    <table>

<tr>
    <td style="width: 117px; border-bottom: 1px solid #F0F0F0;">
        <p style="font-size: 20px; text-align:center;">GAMBAR</p>
    </td>
    <td style="width: 451px; border-bottom: 1px solid #F0F0F0;">
        <p style="font-size: 20px; text-align:left;">PRODUK</p>
    </td>
    <td style="width: 234px; border-bottom: 1px solid #F0F0F0;">
        <p style="font-size: 20px; text-align:left;">JUMLAH KECIL</p>
    </td>
    <td style="width: 234px; border-bottom: 1px solid #F0F0F0;">
        <p style="font-size: 20px; text-align:left;">KUANTITI</p>
    </td>
    <td style="width: 117px; border-bottom: 1px solid #F0F0F0;">
    <p style="font-size: 20px; text-align:left;">KELUARKAN</p>
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
            <button class="loginbutton" type="submit" value="<?=$key;?>" name="removefromcart" style="float: right; margin-top:18px; margin-right: 30px;" >Alih keluar</button>
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
    <form action="checkout.php" method="post">
    <a style="text-decoration: none;" href="checkout.php?id=<?=$key; ?>" class="loginbutton" name="checkout" type="submit">Daftar Keluar</a>
    </form>
    <?php
        }
    
    }
    else{
        ?> 
            <p style="font-size: 20px;">Anda tidak mempunyai kaedah pembayaran yang dikaitkan dengan akaun tersebut</p>
            <p style="font-size: 20px;"><a href="paymentmethod.php" class="w3-hover-opacity">Tambah Kaedah Pembayaran</a></p>
        
            <?php
            if($_SESSION['address'] != ""){
            
            ?>    
            <p style="font-size: 20px;">ATAU</p>
            <p style="font-size: 20px;">Bayar tunai semasa penghantaran</p>
            <a style="text-decoration: none;" href="checkout.php?id=<?=$key; ?>" class="loginbutton" name="checkout" type="submit">Daftar Keluar</a>
            <?php
            }
            else{
                ?>
            <p style="font-size: 20px;">Anda tidak mempunyai alamat yang dikaitkan dengan akaun</p>
            <p style="font-size: 20px;"><a href="address.php" class="w3-hover-opacity">Tambah Alamat</a></p>
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
include('malayfooter.php');
?>
    </body>
</html>