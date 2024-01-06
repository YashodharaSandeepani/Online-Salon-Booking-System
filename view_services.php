<?php
session_start();

require 'connection.php';

$services = Database::search("SELECT * FROM `service`");
$service_rows = $services->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="stylesheet" type="text/css" href="assets/slide.css">
    <title>View Services</title>
</head>
<body>

<?php
  include 'components/header.php';
?>


<div class="slideshow-container">

<div class="mySlides fade">
  <img src="https://www.nerdwallet.com/assets/blog/wp-content/uploads/2017/10/GettyImages-947995974.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="https://s3-eu-west-1.amazonaws.com/websites-wordpress-uploads/premiersoftware.uk/wp-content/uploads/2017/03/2017-MAR-17-GUIDE-TO-BUYING-AN-ALREADY-ESTABLISHED-HAIR-SALON.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="https://www.nerdwallet.com/assets/blog/wp-content/uploads/2017/10/GettyImages-947995974.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<h1 class="center">Our Services</h1>
<div class="container">
  <div class="card-container">
    <?php 
      while ($row = $services->fetch_assoc()) {
        echo '
        <div class="service-card">
          <p><b>Service Name:</b><br/> '.$row['name'].'</p>
          <p><b>Service Description:</b><br/> '.$row['description'].'</p>
          <p><b>Service Duration:</b><br/> '.$row['duration'].'</p>
          <p><b>Service Price:(Rs)</b><br/> '.$row['price'].'</p>
        </div>
        ';
      }
    ?>
  </div>
</div>  

<?php
  include 'components/footer.php';
?>

<script src="./assets/services.js"></script>
</body>
</html>
