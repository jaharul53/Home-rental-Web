<?php
include 'connect.php';

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];



$query="INSERT INTO contact_form (name,email,message) VALUES ('$name','$email','$message')";
$run=mysqli_query($con,$query);

if($run){
    header('location: contactus.php');
    echo ("Message Sent");
}


?>