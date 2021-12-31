<?php
session_start();

include ("dbcon.php");

include("navbar.php");


?>
<html>
<body>
<br>
    <div style="width: 1170px; margin: auto;">
    <h1 class="w3-container w3-xlarge">PRODUCT</h1>
    <p class="w3-container" style="color: #9b9b9b">ADD/EDIT INFORMATION OF EXISTING PRODUCTS</p>
    <table>
    <tr>
        <td style="width: 117px; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">NO.</p>
        </td>
        <td style="width: 175.5px; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">IMAGE</p>
        </td>
        <td style="width: 334px; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">PRODUCT</p>
        </td>
        <td style="width: 117px; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">QUANTITY</p>
        </td>
        <td style="width: 175.5px; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">PRICE</p>
        </td>
        <td style="width: 117px; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">EDIT</p>
        </td>
        <td style="width: 117px; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">DELETE</p>
        </td>
    </tr>
    <tbody>
   
    </tbody>
    </table>
    <br>
    <p style="font-size: 12px;"><a href="addproduct.php" class="w3-hover-opacity">Add New Product</a></p>

    </body>
</html>

<?php
include('footer.php');
?>
