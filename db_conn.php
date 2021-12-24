<?php

$mysql_host='localhost';
$mysql_user="root";
$mysql_password="";
$mysql_db="swap";

$con = new mysqli($mysql_host,$mysql_user,$mysql_password,$mysql_db);
if (!$con){
    echo $con->errno ."<br>";
    die('Could not connect: '. $con->error);
}
