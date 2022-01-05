<?php
session_start();

include("dbcon.php");
include("navbar.php");


?>


<html>

<style>

*{
  box-sizing: border-box;
}

.productimage{
    height: 300px;
    width: 292.5px;
}

.card1{
    transition: 0.5s;
    height: 500px;
    width: 292.5px;
}
.card1:hover{
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container1{
    padding: 2px 16px;
}
</style>

<?php

    $ref_table = "product";
    $fetchdata = $database->getReference($ref_table)->getValue();
    
    ?>
    <div style="width: 1170px; margin: auto;">
    <?php
    if($fetchdata > 0)
        {
            $i=1;
            foreach($fetchdata as $key => $row)
            {

                ?>    <div class="card1 w3-col">
                        <tr style="font-size: 12px">
                        <td><img class="productimage" src="<?=$row['Image'];?>"></img></td>
                        <div class="container1">
                            <td><p style="text-align:center;"><?=$row['Product Name'];?></p></td>
                        <td><p style="text-align:center;"><?=$row['Price'];?></p></td>
                        </div>
                    </div>
            
                    
                   
                    <?php
                }
            }
            else
            {
                ?>
               
                <?php
            }
?>
</div>

  </html>