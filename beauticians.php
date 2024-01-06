<?php
session_start();

require 'connection.php';

$beauticians = Database::search("SELECT * FROM `beautician`");
$beauticians_rows = $beauticians->num_rows;
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
        <h1>Manage Beauticians</h1>
        <a class="button-block" href="add_beauticians.php">Add Beauticians</a>
        <div style="margin-top: 30px;"></div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < $beauticians_rows; $i++) {
                    $beautician = $beauticians->fetch_assoc();
                    echo "<tr>";
                    echo "<td>" . $beautician['name'] . "</td>";
                    echo "<td>" . $beautician['email'] . "</td>";
                    echo "<td>" . $beautician['phone'] . "</td>";
                    echo "<td>";
                    echo "<a class='button-block-sm' href='delete_beauticians.php?id=" . $beautician['id'] . "'>Delete</a>"; // Delete option with a link to delete.php passing the service ID
                    echo " &nbsp; ";
                    echo "<a class='button-block-sm' href='edit_beauticians.php?id=" . $beautician['id'] . "'>Edit</a>"; // Edit option with a link to edit.php passing the service ID
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