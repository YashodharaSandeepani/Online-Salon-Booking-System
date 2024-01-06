<?php
session_start();

require 'connection.php';

$users = Database::search("SELECT * FROM `user`");
$users_rows = $users->num_rows;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Manage Users</title>
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
        <h1>Manage Users</h1>
        <div style="margin-top: 30px;"></div>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Type</th>
                    <th>Role</th> <!-- New column for delete and edit options -->
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < $users_rows; $i++) {
                    $user = $users->fetch_assoc();
                    echo "<tr>";
                    echo "<td>" . $user['first_name'] . "</td>";
                    echo "<td>" . $user['last_name'] . "</td>";
                    echo "<td>" . $user['email'] . "</td>";
                    echo "<td>" . $user['phone'] . "</td>";
                    if ($user['type'] == 0) {
                        echo "<td>Customer</td>";
                    } else if ($user['type'] == 1) {
                        echo "<td>Admin</td>";
                    } else if ($user['type'] == 2) {
                        echo "<td>Receptionist</td>";
                    }

                    echo "<td>";
                    echo "<a class='button-block-sm' href='convert_to_admin.php?id=" . $user['id'] . "'>Admin</a>";
                    echo " &nbsp; ";
                    echo "<a class='button-block-sm' href='convert_to_receptionist.php?id=" . $user['id'] . "'>Receptionist</a>";
                    echo " &nbsp; ";
                    echo "<a class='button-block-sm' href='convert_to_customer.php?id=" . $user['id'] . "'>Customer</a>";
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