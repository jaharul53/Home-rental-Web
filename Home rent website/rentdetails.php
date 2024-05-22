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
        echo "<button onclick=\"window.location.href='userinfo.php';\">$_SESSION[name]</button>"; ?>
        <button onclick="window.location.href='logout.php';">logout</button>

    </section>

    <?php

    $query = "SELECT * FROM `rent` WHERE nid = '$nid'";
    $result = mysqli_query($con, $query);

    if ($result->num_rows > 0) {
        echo "<table class='table' border=1>
     <tr>
         <th>Name</th>
         <th>Size</th>
         <th>Bedroom</th>
         <th>Area</th>
         <th>City</th>
         <th>Rent Ammount</th>
     </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['size'] . "</td><td>" . $row['bed'] . "</td><td>" . $row['area'] . "</td><td>" . $row['city'] . "</td><td>" . $row['rent_ammount'] . "</td></tr>";
        }
        echo "</table>";
        echo "<br><br><br>";
        echo " <form class='mid' action='clearrent.php' method='post'> <input type='submit' value='clear all!'></form>";

    } else {
        echo "<h2 class='mid'>NO Data Against This User!<h2>";
    }


    ?>





</body>

</html>