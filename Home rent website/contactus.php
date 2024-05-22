<?php
include 'connect.php';
session_start();


$counter = isset($_SESSION['name']);
?>

<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html>

<head>
  <title>Contact Us</title>
</head>

<body>
  <section class="navbar">

    <a href="index.php"><img src="banglalogo.png" alt="" height="70"></a>



    <?php
    if ($counter) {


      ?>
      <button onclick="window.location.href='rent.php';">Rent Now!</button>
      <button onclick="window.location.href='rentdetails.php';">Rent Details</button>


      <?php
      echo "<button onclick=\"window.location.href='userinfo.php';\">$_SESSION[name]</button>"; ?>
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
  <br>


  <section>
    <fieldset class="mid">
      <h2>Head Office</h2>
      <p>Daffodil Smart City <br> Khagan, Ashulia, Dhaka</p>
    </fieldset>
    <br>
    <fieldset class="mid">
      <h2>Contact Information</h2>
      <p>Email: sayed15-13789@diu.edu.bd</p>
      <p>Phone Number: 01843160767</p>
      <p>Email: johurul15-13653@diu.edu.bd</p>
      <p>Phone Number: 01521722313</p>
    </fieldset>
    <br>

    <fieldset class="mid">
      <h2>Get in Touch</h2>
      <p>If you have any questions or inquiries, please feel free to contact us using the form below.</p>

      <form action="submit_contact_form.php" method="POST">

        <input type="text" id="name" name="name" placeholder="Name" required><br>


        <input type="email" id="email" name="email" placeholder="Email" required><br>


        <textarea id="message" name="message" rows="4" placeholder="Message" required></textarea><br>

        <input type="submit" value="Submit">
      </form>
    </fieldset>
  </section>


</body>

</html>