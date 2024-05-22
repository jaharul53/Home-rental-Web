<?php
include 'connect.php';
session_start();
@$name = $_SESSION['name'];
@$nid = $_SESSION['nid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <section class="navbar">

        <a href="index.php"><img src="banglalogo.png" alt="" height="70"></a>
        <a href="contactus.php" class="links">About Us</a>
        <button onclick="window.location.href='rent.php';">Rent Now!</button>

        <?php
        echo "<button onclick=\"window.location.href='userinfo.php';\">$_SESSION[name]</button>";
        ?>
        <button onclick="window.location.href='logout.php';">logout</button>

    </section>
    <?php
        $query = "DELETE FROM `rent` WHERE nid = '$nid'";
        mysqli_query($con, $query);
        echo" <h2 class='mid'>$name all of your booking history has been deleted!<h2>";
    ?>

</body>

</html>
