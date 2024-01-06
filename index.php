<?php
session_start();

require 'connection.php';

$services = Database::search("SELECT * FROM `service`");
$service_rows = $services->num_rows;
?>

<!DOCTYPE html>
<html>

<head>
  <title>Saloon System</title>
  <link rel="stylesheet" type="text/css" href="assets/style.css">
  
</head>

<body>
  <?php
  include 'components/header.php';
  ?>

  <center style="margin-top: 50px;">
    <h1 class="glow">
      Welcome to USHINE!
    </h1>
  </center>

  <div style="width: 92%;">
    <div class="responsive-container-block bigContainer">
      <div class="responsive-container-block Container bottomContainer">
        <div class="ultimateImg">
          <img class="mainImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/mp4.svg">

        </div>
        <div class="allText bottomText">
          <p class="text-blk headingText">
            About Us
          </p>
          <p class="text-blk subHeadingText">
            Tradition since 1889
          </p>
          <p class="text-blk description">
            We are a Multi grant-winning Beauty salon, situated in Kandy, Sri Lanka. Our great group of staff and specialists are accessible to enable you to feel good and quiet in our wonderful salon.

Every individual from staff conveys their own abilities and identity to the salon, with a well-disposed group of receptionists and advisors striving to set aside a few minutes at Indulgence is to the magnificent standard our customers anticipate from us.


          </p>
          
        </div>
      </div>
    </div>
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
  <a class="explore" href="./view_services.php">
      View Services
  </a>
</div>  


  <div style="display: flex; justify-content: center;">
    <div style="width: 70%;">
      <!-- Contact Section -->
      <div class="w3-container w3-padding-64" id="contact">
        <h1>Contact</h1><br>
        <div class="w3-col l6 w3-padding-large">
          <img src="Images/Contactus.png" class="w3-round w3-image w3-opacity-min" alt="contactus.png" style="width:70%">
        </div>
      </div>
      <p><b>Feel free to get in touch with us</b></p>
      <p class="w3-text-blue-grey w3-large"></p>
      <p>You can also contact us by 
		  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone <b>011-112 1123</b>
		  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email <b>ushine@gamil.com</b><br>
		  <br>Also you can send us a message here:</p>
      <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
        <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
      </form>
    </div>
  </div>

  </div>


  <?php
  include 'components/footer.php';
  ?>
</body>

</html>