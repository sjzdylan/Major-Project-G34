<?php
session_start();
include('dbcon.php');

if (isset($_SESSION['email'])) {
}
else{
    header("location: login.php");
}

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
         
         $ref_table = "orderhistory/".$_SESSION['user_id']."/";

         $cartdata = $database->getReference("cart/".$_SESSION["user_id"])->getValue();

         $updatequery_result = $database->getReference($ref_table)->update($cartdata);
         
         $database->getReference("cart/".$_SESSION["user_id"])->remove();

         header('location: profile.php');
         
    }
    else
    {
        header('location: productmanagement.php');
        echo "Product does not exist";
    }
}
?>