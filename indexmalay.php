<?php
session_start();

include("dbcon.php");
include("malaynavbar.php");


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

<style>


body{
    background-color: #FFBF66;
}
*{
  box-sizing: border-box;
}

.productimage{
    height: 300px;
    width: 289.8px;
}

.card1{
    transition: 0.5s;
    height: 600px;
    width: 292.5px;
    border: 1px;
    border-color: #FFBF66;
    border-style: solid;
    background-color: #FFFFFF;
}
.card1:hover{
    box-shadow: 0 8px 16px 0 #FFBF66;
}
.container1{
    padding: 2px 16px;
    
}
.loginbutton {
                background-color: black;
                color: white;
                border: none;
                cursor: pointer;
                padding: 4px 10px;
                font-size: 20px;
                border-radius: 2px;
}
.items{
    float: left;
    padding-left: 110px;
    padding-top: 50px;
}

.slideshow {
    float: right;
    width: 500px;
    padding-left: 20px;
    padding-right: 20px;
    padding-top:20px;
    padding-bottom: 20px;
    background-color: #FFBF66;
    padding-top: 50px;
}

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

.loginbutton{
    background-color: #FFBF66;
    color: #000000;
}
</style>
<body>

<div class="slideshow">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 2</div>
  <img src="images/strongpwmal.jpg" style="width:100%; border: solid;">
  <div class="text">skidiki</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 2</div>
  <img src="images/phishmal.jpg" style="width:100%; border: solid;">
  <div class="text">Caption Two</div>
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
</div>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</div>

<div class="items" style="background-color:#FFBF66;">
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

                    ?>      
                    
                        <div class="card1 w3-col l3 s6">
                        <tr style="font-size: 20px">
                        <td><img class="productimage" src="<?=$row['Image'];?>"><img></td>
                        <div class="container1">
                            <td><p style="text-align:center; font-size: 30px;"><?=$row['Product_Name'];?></p></td>
                        <td><p style="text-align:center; font-size: 20px;"><?=$row['Price'];?></p></td>
                        </div>
                        <br><br>
                        <div style="text-align: center;">
                        <form action="cart.php" method="post">

                        <a style="text-decoration: none;" href="cart.php?id=<?=$key; ?>" class="loginbutton" name="addtocart" type="submit">Add to Cart </a>
                        </form>
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
          </div>


<?php
include('malayfooter.php');
?>

</body>


</html>

 