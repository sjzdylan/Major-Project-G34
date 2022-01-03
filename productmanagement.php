<?php
session_start();

include("dbcon.php");
include("adminauth.php");
include("navbar.php");


?>
<html>
<style>
     .deletebutton{
        border: none;
        background-color: inherit;
        text-decoration: underline;
        cursor: pointer;
     }

    .productimage{
        height: 96px;
        width: 96px;
    }
</style>
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
        <td style="width: 146.25px; border-bottom: 1px solid #F0F0F0;">
            <p style="font-size: 12px; text-align:left;">QUANTITY</p>
        </td>
        <td style="width: 146.25px; border-bottom: 1px solid #F0F0F0;">
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
        <?php

            $ref_table = "product";
            $fetchdata = $database->getReference($ref_table)->getValue();

            if($fetchdata > 0)
            {
                $i=1;
                foreach($fetchdata as $key => $row)
                {
                    ?>
                    <tr style="font-size: 12px; text-align: left;">
                    <td><?=$i++;?></td>
                    <td><img class="productimage" src="<?=$row['Image'];?>"></img></td>
                    <td><?=$row['Product Name'];?></td>
                    <td><?=$row['Quantity'];?></td>
                    <td><?=$row['Price'];?></td>
                    <td>
                        <a href="editproduct.php?id=<?=$key; ?>">Edit</a>
                    </td>
                    <td>
                    <form action="updateproduct.php" method="post">
                        <button class="deletebutton" type="submit" value="<?=$key;?>" name="deleteproduct">Delete</button>
                    </form>
                    </td>
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
    <br>
    <p style="font-size: 12px;"><a href="addproduct.php" class="w3-hover-opacity">Add new product</a></p>

    </body>
</html>

<?php
include('footer.php');
?>
