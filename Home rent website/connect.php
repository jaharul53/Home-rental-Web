<?php

$host = 'localhost';
$user = 'root';
$password='';
$db='finalproject';

$con=mysqli_connect($host,$user,$password,$db);

if(!$con){
    die("error!".mysqli_connect_error());
}


?>