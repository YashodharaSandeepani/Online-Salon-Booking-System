<?php
session_start();

require 'connection.php';

$services = Database::search("SELECT * FROM `service`");
$services_rows = $services->num_rows;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Manage Services</title>
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
        <h1>Manage Services</h1>
        <a class="button-block" href="add_service.php">Add Service</a>
       <div style="margin-top: 30px;"></div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>Price</th>
                    <th>Actions</th> <!-- New column for delete and edit options -->
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < $services_rows; $i++) {
                    $service = $services->fetch_assoc();
                    echo "<tr>";
                    echo "<td>" . $service['name'] . "</td>";
                    echo "<td>" . $service['description'] . "</td>";
                    echo "<td>" . $service['duration'] . "</td>";
                    echo "<td>" . $service['price'] . "</td>";
                    echo "<td>";
                    echo "<a class='button-block-sm' href='delete_service.php?id=" . $service['id'] . "'>Delete</a>"; // Delete option with a link to delete.php passing the service ID
                    echo " &nbsp; ";
                    echo "<a class='button-block-sm' href='edit_service.php?id=" . $service['id'] . "'>Edit</a>"; // Edit option with a link to edit.php passing the service ID
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


    <div style="margin-top: 220px;"></div>
    <?php

    include 'components/footer.php';

    ?>

</body>

</html>s