<?php
session_start();

require 'connection.php';

$appointments = Database::search("SELECT * FROM `appointments`");
$appointment_rows = $appointments->num_rows;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Manage Appointment</title>
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
    <div style="margin-top: 150px;"></div>

    <div class="content">
        <h1>Manage Appointments</h1>
        <div style="margin-top: 30px;"></div>
        <table>
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Service Name</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                    <th>Status</th>
                    <th>Actions</th> <!-- New column for delete and edit options -->
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < $appointment_rows; $i++) {
                    $appointment = $appointments->fetch_assoc();
                    $service = Database::search("SELECT * FROM `service` WHERE `id` = " . $appointment['service_id']);
                    $service = $service->fetch_assoc();

                    $user = Database::search("SELECT * FROM `user` WHERE `id` = " . $appointment['user_id']);
                    $user = $user->fetch_assoc();
                    echo "<tr>";
                    echo "<td>" . $user['first_name'] . " " . $user['last_name'] . "</td>";
                    echo "<td>" . $service['name'] . "</td>";
                    echo "<td>" . $appointment['date'] . "</td>";
                    echo "<td>" . $appointment['time'] . "</td>";
                    if ($appointment['status'] == 0) {
                        echo "<td>Not Confirmed</td>";
                    } else if ($appointment['status'] == 1) {
                        echo "<td>Confirmed</td>";
                    } else {
                        echo "<td>Reject</td>";
                    }
                    echo "<td>";
                    echo "<a class='button-block-sm' href='confirm_appointment.php?id=" . $appointment['id'] . "'>Confirm Appointment</a>";
                    echo " &nbsp; ";
                    echo "<a class='button-block-sm' href='reject_appointment.php?id=" . $appointment['id'] . "'>Reject Appointment</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


    <div style="margin-top: 150px;"></div>
    <?php

    include 'components/footer.php';

    ?>

</body>

</html>s