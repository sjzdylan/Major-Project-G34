<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Webpage Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<style>
.textsize {

  font-size: 20px;

}
</style>
    <body>

    <div style="width: 1170px; margin: auto;">
        <footer class="w3-padding-64 w3-small w3-center" id="footer">
            <div class="w3-row-padding">

              <div class="w3-col s3 w3-justify" style='margin-left:10%; margin-right:10%;'>
                <p class="textsize">付款方式</p>
                <p><i class="fa fa-fw fa-credit-card textsize"></i> 行用卡</p>
                <img src="images\paymentimg.png">
               
              </div>
        
              <div class="w3-col s3 w3-justify textsize">
                <p  class="textsize">MPG34SECUREGROCERIES</p>
                <p><a href="aboutus.php" class="w3-hover-opacity">关于我们</a></p>
                <p><a href="#" class="w3-hover-opacity">怎么买</a></p>
                <p><a href="#" class="w3-hover-opacity">问题与回答</a></p>
                <p><a href="#" class="w3-hover-opacity">资料</a></p>
              </div>
        
              <div class="w3-col s3 w3-justify textsize">
                <p  class="textsize">账户</p>
                <p><a href="login.php" class="w3-hover-opacity">我的账户</a></p>
                <p><a href="cart.php" class="w3-hover-opacity">购物车</a></p>
                <?php
                if(isset($_SESSION['user_id']))
                {
                  ?>  <p><a href="logout.php" class="w3-hover-opacity">推出</a></p>

                  <?php
                }
                else
                {
                  ?>  <p><a href="forgetpasswordform.php" class="w3-hover-opacity">忘记密码</a></p>

                  <?php
                }
                ?>
               
               

                <br>
                <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
                <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
              </div>
            </div>
        </footer>
        </div>
        <div style="width: 1170px; margin: auto;">
          <p  class="textsize">MPG34SECUREGROCERIES</p>
        </div>
    </body>
</html>