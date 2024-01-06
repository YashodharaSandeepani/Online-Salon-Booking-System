<?php
session_start();

include "connection.php";
?>

<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us </title>
    <link rel="stylesheet" href="assets/about.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">

    <style>
        body {
            margin: 1;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-color: #DDE6ED;
        }
    </style>

</head>



<body>


    <?php

    include 'components/header.php';

    ?>

    <!-- About Section -->
    <div class="w3-row w3-padding-64" id="about">
        <div class="w3-row">
            <div class="w3-col m6 w3-padding-large w3-hide-small">
                <img src="images/Salonn.jpg" alt="Interior Salon" width="500" height="400">
            </div>

            <div class="w3-card w3-padding-large" >
                <h1 class="w3-center">About Us</h1><br>
                <h5 class="w3-center">Tradition since 1889</h5>
                <p class="w3-large">We are a Multi grant-winning Beauty salon, situated in Kandy, Sri Lanka. Our great group of staff and specialists are accessible to enable you to feel good and quiet in our wonderful salon.

Every individual from staff conveys their own abilities and identity to the salon, with a well-disposed group of receptionists and advisors striving to set aside a few minutes at Indulgence is to the magnificent standard our customers anticipate from us.</p>
                
            </div>

        </div>
    </div>

    <hr>

    <!-- our team -->

    <div class="team-container">
        <h1 class="team-heading">Our Team</h1>

        <div class="beautician">
            <img class="beautician-img" src="images/beautician1.jpg" alt="Beautician 1">
            <div class="card">

                <p class="beautician-name">Emma Smith</p>
                <p class="beautician-title">Senior Stylist</p>
                <p class="beautician-description">She is a highly skilled beautician with over 10 years of experience in the industry. She specializes in hair styling and makeup.</p>

            </div>
        </div>

        <div class="beautician">
            <img class="beautician-img" src="images/beautician2.jpeg" alt="Beautician 2">
            <div class="card">
                <p class="beautician-name">Olivia Johnson</p>
                <p class="beautician-title">Master Colorist</p>
                <p class="beautician-description">She is a certified colorist with over 8 years of experience in the industry. She specializes in hair coloring and highlights.</p>
            </div>
        </div>

        <div class="beautician">
            <img class="beautician-img" src="images/beautician3.jpg" alt="Beautician 3">
            <div class="card">
                <p class="beautician-name">Sophia Lee</p>
                <p class="beautician-title">Makeup Artist</p>
                <p class="beautician-description">She is a professional makeup artist with over 5 years of experience in the industry. She specializes in bridal and special occasion makeup.</p>
            </div>
        </div>
    </div>

    

 <?php

    include 'components/footer.php';

    ?>

</body>


</html>