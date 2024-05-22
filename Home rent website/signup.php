<?php
include 'connect.php';

$name=$_POST['name'];
$nid=$_POST['nid'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];


$query="INSERT INTO allinfo (name,nid,address,email,password) VALUES ('$name','$nid','$address','$email','$password')";
$run=mysqli_query($con,$query);

if($run){
    header('location: login.html');
}


?>