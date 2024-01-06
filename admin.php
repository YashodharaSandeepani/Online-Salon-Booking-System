<?php
session_start();

include "connection.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Saloon System</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
<!--HEADER-->
	
	<div class="header">
	  <img src = "images/logo.png" width = "200px" height = "200px">
	  
	</div>

    <?php

    include 'components/admin_header.php';

    ?>

    <div style="margin-top: 220px;"></div>

    <div class="content">
        <center>
            <h2>Welcome <?php echo $_SESSION['user']['first_name'] . " " . $_SESSION['user']['last_name'] ?></h2>
            <form>

                <div class="form-group">
                    <a href="beauticians.php" class="button-block">Manage Beauticians</a>
                    <a href="">&nbsp;</a>
                    <a href="services.php" class="button-block">Manage Services</a>
                    <a href="">&nbsp;</a>
                    <a href="users.php" class="button-block">Manage Users</a>
                </div>

            </form>
        </center>
    </div>

    <div style="margin-top: 220px;"></div>
    <?php

    include 'components/footer.php';

    ?>

</body>

</html>s