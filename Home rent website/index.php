<?php
include 'connect.php';
session_start();


$counter = isset($_SESSION['name']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <section class="navbar">

        <a href="index.php"><img src="banglalogo.png" alt="" height="70"></a>

        <a href="contactus.php" class="links">About Us</a>

        <?php
        if ($counter) {


            ?>
            <button onclick="window.location.href='rent.php';">Rent Now!</button>
            <button onclick="window.location.href='rentdetails.php';">Rent Details</button>

            <?php
            echo "<button onclick=\"window.location.href='userinfo.php';\">$_SESSION[name]</button>";
            ?>
            <button onclick="window.location.href='logout.php';">logout</button>

            <?php



        } else {
            ?>
            <button onclick="window.location.href='login.html';">Login</button>
            <button onclick="window.location.href='signup.html';">Sign Up</button>
            <?php
        }
        ?>


    </section>
    <section>
    <img src="homeindex.png" height="800px" width="1340px" alt=""> 
    </section>



</body>

</html>