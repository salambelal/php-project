<?php
$DBhost      = "localhost";
$DBuser        = "root";
$DBpassword    = "";
$BDname        = "pets";



$DB = new PDO("mysql:host=$DBhost;dbname=$BDname",$DBuser,$DBpassword);


//set the PDO error mode to exception 

$DB-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>
