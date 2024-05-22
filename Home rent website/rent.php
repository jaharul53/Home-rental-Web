<?php
session_start();
include("connect.php");

$counter = isset($_SESSION['name']);
if ($counter) {
    $name = $_SESSION['name'];
    $nid = $_SESSION['nid'];

    if (isset($_POST['1'])) {
        $query = "INSERT INTO `rent`(`name`,`nid`, `size`, `bed`, `area`, `city`,`rent_ammount`) VALUES ('$name','$nid',2700,3,'Dhanmodni','Dhaka','27,000')";
        mysqli_query($con, $query);
    }
    if (isset($_POST['2'])) {
        $query = "INSERT INTO `rent`(`name`,`nid`, `size`, `bed`, `area`, `city`,`rent_ammount`) VALUES ('$name','$nid',2600,3,'Ashulia','Dhaka','29,000')";
        mysqli_query($con, $query);
    }
    if (isset($_POST['3'])) {
        $query = "INSERT INTO `rent`(`name`,`nid`, `size`, `bed`, `area`, `city`,`rent_ammount`) VALUES ('$name','$nid',2000,4,'Banasri','Dhaka','20,000')";
        mysqli_query($con, $query);
    }
    if (isset($_POST['4'])) {
        $query = "INSERT INTO `rent`(`name`,`nid`, `size`, `bed`, `area`, `city`,`rent_ammount`) VALUES ('$name','$nid',1900,2,'Dhanmodni','Dhaka','19,000')";
        mysqli_query($con, $query);
    }
    if (isset($_POST['5'])) {
        $query = "INSERT INTO `rent`(`name`,`nid`, `size`, `bed`, `area`, `city`,`rent_ammount`) VALUES ('$name','$nid',2600,3,'Mirpur','Dhaka','17,000')";
        mysqli_query($con, $query);
    }
    if (isset($_POST['6'])) {
        $query = "INSERT INTO `rent`(`name`,`nid`, `size`, `bed`, `area`, `city`,`rent_ammount`) VALUES ('$name','$nid',2200,4,'Ashulia','Dhaka','25,000')";
        mysqli_query($con, $query);
    }
}
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
        <button onclick="window.location.href='rentdetails.php';">Rent Details</button>
        <!-- <button onclick="window.location.href='login.html';">Login</button> -->
        <?php
        echo "<button onclick=\"window.location.href='userinfo.php';\">$_SESSION[name]</button>";
        ?>
        <button onclick="window.location.href='logout.php';">logout</button>

    </section>
    <section>
        <br>
        <div class="mid">
            <h1>Find Your Perfect Home Away from Home</h1>
        </div>

        <div class="rent-container">
            <div class="rent-item"><img src="rentimage/1.jpg" alt="">
                <div class="mid"><b>BDT 27000</b></div>
                <div class="mid"># 2700sqft # 3 bed,
                    Dhanmondi,Dhaka. <br></div>
                <div class="mid">
                    <form method="POST">
                        <input type="submit" name="1" value="Book Now">
                    </form>
                </div>
            </div>
            <div class="rent-item"><img src="rentimage/2.jpg" alt="">
                <div class="mid"><b>BDT 29000</b></div>
                <div class="mid"># 2600sqft # 3 bed,
                    Asulia,Dhaka. <br></div>
                <div class="mid">
                    <form method="POST">
                        <input type="submit" name="2" value="Book Now">
                    </form>
                </div>
            </div>

            <div class="rent-item"><img src="rentimage/3.jpg" alt="">
                <div class="mid"><b>BDT 20000</b></div>
                <div class="mid"># 2000sqft # 4 bed,
                    Banasri,Dhaka. <br></div>
                <div class="mid">
                    <form method="POST">
                        <input type="submit" name="3" value="Book Now">
                    </form>
                </div>
            </div>

        </div>
        <div class="rent-container">
            <div class="rent-item"><img src="rentimage/4.jpg" alt="">
                <div class="mid"><b>BDT 19000</b></div>
                <div class="mid"># 1900sqft # 2 bed,
                    Dhanmondi,Dhaka. <br></div>
                <div class="mid">
                    <form method="POST">
                        <input type="submit" name="4" value="Book Now">
                    </form>
                </div>
            </div>
            <div class="rent-item"><img src="rentimage/5.jpg" alt="">
                <div class="mid"><b>BDT 17000</b></div>
                <div class="mid"># 2600sqft # 3 bed,
                    Mirpur,Dhaka. <br></div>
                <div class="mid">
                    <form method="POST">
                        <input type="submit" name="5" value="Book Now">
                    </form>
                </div>
            </div>

            <div class="rent-item"><img src="rentimage/6.jpg" alt="">
                <div class="mid"><b>BDT 25000</b></div>
                <div class="mid"># 2200sqft # 4 bed,
                    Ashulia,Dhaka. <br></div>
                <div class="mid">
                    <form method="POST">
                        <input type="submit" name="6" value="Book Now">
                    </form>
                </div>
            </div>

        </div>


    </section>
    <br><br>
</body>
<style>
    .rent-container {
        display: flex;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 50px;
    }

    .rent-item {
        width: 100%;
        height: 300px;
        background-color: #000;
    }

    .mid {
        align-items: center;
    }
</style>

</html>