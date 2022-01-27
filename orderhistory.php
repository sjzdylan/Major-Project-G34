<?php
session_start();
error_reporting(0);

include('navbar.php');

include('dbcon.php');

$fetchdata = $database->getReference('userinfo')->getChild($_SESSION['user_id'])->getValue();

$_SESSION["address"] = $fetchdata['address'];

?>

<html>
<style>
    
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
<body>

    <br>
    <div class="w3-container" style="width: 1170px; margin: auto;">
    <h1 class="w3-xlarge">ORDER HISTORY</h1>
    <p style="color: #9b9b9b; font-size: 20px;">YOUR RECENT PURCHASES CAN BE SEEN HERE</p>
    <br>
    <table>
    <tr>
        <td style="width: 117px; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 20px; text-align:left;">NO.</p>
        </td>
        <td style="width: 668px; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 20px; text-align:left;">PRODUCT</p>
        </td>
        <td style="width: 192.5px; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 20px; text-align:left;">QUANTITY</p>
        </td>
        <td style="width: 192.5px; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 20px; text-align:left;">PRICE</p>
        </td>
    </tr>
    <tbody>
        <?php

            $ref_table = "orderhistory/".$_SESSION['user_id'];
            $fetchdata = $database->getReference($ref_table)->getValue();

            if($fetchdata > 0)
            {
                $i=1;
                foreach($fetchdata as $key => $row)
                {
                    ?>
                    <tr style="font-size: 20px; text-align: left;">
                    <td><?=$i++;?></td>
                    <td><?=$row['Product_Name'];?></td>
                    <td><?=$row['Quantity'];?></td>
                    <td><?=$row['Price'];?></td>
                    </tr>

                    <?php
                }
            }
            else
            {
                ?>
               
                <?php
            }
        ?>
    </tbody>
    </table>
    </div>
    <br>
    <br>

</div>

</body>

</html>

<?php

include('footer.php');

?>