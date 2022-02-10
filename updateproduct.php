<?php
session_start();
ob_start();
include('dbcon.php');
include("adminauth.php");

if(isset($_POST['deleteproduct']))
{
    $key = $_POST['deleteproduct'];

    $ref_table = "product/".$key;
    $deletequery_result = $database->getReference($ref_table)->remove();
    
    if($deletequery_result)
    {
        echo "Product has successfully been deleted";
        header('location: productmanagement.php');

    }
    else
    {
        echo "Product failed to be deleted";
        header('location: productmanagement.php');
    }
}

if(isset($_POST['updateproduct']))
{
    $key = $_POST['key'];
    $productname = strip_tags($_POST['productname']);
    $price = strip_tags($_POST['price']);
    $quantity = strip_tags($_POST['quantity']);
    $image = strip_tags($_POST['image']);

    $updateData = [
        'Product_Name'=>$productname,
        'Price'=>$price,
        'Quantity'=>$quantity,
        'Image'=>$image

    ];

    $ref_table = "product/".$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result)
    {
        echo "Product has successfully been updated";
        header('location: productmanagement.php');

    }
    else
    {
        echo "Product failed to be updated";
        header('location: productmanagement.php');
    }
}

if(isset($_POST['addproduct']))
{
    echo $_POST['productname'];
    $productname = strip_tags($_POST['productname']);
    $price = strip_tags($_POST['price']);
    $quantity = strip_tags($_POST['quantity']);
    $image = strip_tags($_POST['image']);

    $postData = [
        'Product_Name'=>$productname,
        'Price'=>$price,
        'Quantity'=>$quantity,
        'Image'=>$image

    ];

    $ref_table = "product";
    $postRef_result = $database->getReference($ref_table)->push($postData);

    if($postRef_result)
    {
        echo "Product has successfully been added";
        header('location: productmanagement.php');

    }
    else
    {
        echo "Product failed to be added";
        header('location: productmanagement.php');
    }
}

?>
