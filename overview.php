<?php
session_start();

$success = $_GET["success"];

if ($success == "true") {
    echo "<script>alert('Payment successful!')</script>";
} else {
    header("Location: payment.php");
}
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

    <div class="content" style="margin-top: 90px; margin-bottom: 90px;">
        <div class="registration-form">
            <h2>Overview</h2>
            <form action="register_process.php" method="POST">
                <div class="form-group">
                    <label for="customer_name">Customer Name:</label>
                    <input type="text" id="customer_name" name="customer_name" value="<?php echo $_SESSION['user']['first_name'] . " " . $_SESSION['user']['last_name'] ?>" placeholder="Enter your customer name" readonly>
                </div>
                <div class="form-group">
                    <label for="reference_id">Reference ID:</label>
                    <input type="text" id="reference_id" name="reference_id" value="<?php echo $_SESSION['payment_id'] ?>" placeholder="Enter your reference id" readonly>
                </div>
                <div class="form-group">
                    <label for="appointment_date">Appointment Date:</label>
                    <input type="text" id="appointment_date" name="appointment_date" value="<?php echo $_SESSION['appointment_date'] ?>" placeholder="Enter your appointment date" readonly>
                </div>
                <div class="form-group">
                    <label for="appointment_time">Appointment Time:</label>
                    <input type="text" id="appointment_time" name="appointment_time" value="<?php echo $_SESSION['appointment_time'] ?>" placeholder="Enter your appointment time" readonly>
                </div>
                <div class="form-group">
                    <label for="service">Service:</label>
                    <input type="text" id="service" name="service" value="<?php echo $_SESSION['service_name'] ?>" placeholder="Enter your service" readonly>
                </div>
                <div class="form-group">
                    <label for="total_amount">Total Amount:</label>
                    <input type="text" id="total_amount" name="total_amount" value="<?php echo $_SESSION['payment_amount'] ?>" placeholder="Enter your total amount" readonly>
                </div>

				<a class="explore" href="./view_services.php">
					 OK
				</a>
            </form>
		
        </div>
    </div>
	


    <?php

include 'components/footer.php';

?>

</body>

</html>


