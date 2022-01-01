<?php
session_start();

include('dbcon.php');

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
    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $image = $_POST['image'];

    $updateData = [
        'Product Name'=>$productname,
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
    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $image = $_POST['image'];

    $postData = [
        'Product Name'=>$productname,
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