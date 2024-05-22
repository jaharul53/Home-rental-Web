<?php
include 'connect.php';


$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT * FROM allinfo WHERE email='$email' AND password='$password'";
$run=mysqli_query($con,$query);

if($run->num_rows>0){
    
    $row=$run->fetch_assoc();
    session_start();
    $_SESSION['name'] =  $row['name'];
    $_SESSION['nid'] =  $row['nid'];
    header('location: index.php');
}
else{
    echo("Wrong Email or Password!!!");
    echo("<h1>Click <a href='login.html'>Login</a> to try again!<h1>");
}


?>
