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
            
        </style>
<?php
include('navbar.php');
?>

  
 
    <br>
    <div style="width: 1170px; margin: auto;">
    <h1 class="w3-container w3-xlarge">CART</h1>
    <p class="w3-container" style="color: #9b9b9b">YOU'VE GOT NO ITEMS IN THE CART</p>
    <table>
    <tr>
        <td style="width: 10%; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">IMAGE</p>
        </td>
        <td style="width: 60%; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">PRODUCT</p>
        </td>
        <td style="width: 20%; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">QUANTITY</p>
        </td>
        <td style="width: 10%; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">SUBTOTAL</p>
        </td>
    </tr>
    <tr>
        <td style="width: 10%; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">INSERT IMAGE HERE</p>
        </td>
        <td style="width: 60%; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">PRODUCT DETAILS HERE</p>
        </td>
        <td style="width: 20%; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">INSERT QUANTITY BUTTON HERE</p>
        </td>
        <td style="width: 10%; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">INSERT PRICE HERE</p>
        </td>
    </tr>
    </table>
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
    185 x 40 px buttons x2 checkoput and update cart.
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