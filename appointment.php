<?php
session_start();

require 'connection.php';

$service = Database::search("SELECT * FROM `service`");

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

    <div class="content">
        <div class="login-form">
            <h2>Make Appointment</h2>
            <form action="appointment_process.php" method="post">
                <input type="text" name="user_id" value="<?php echo $_SESSION['user']['id'] ?>" hidden>
                <div class="form-group">
                    <label for="service">Service</label>
                    <select id="service" name="service" required>
                        <option value="">Select Service</option>
                        <?php
                        while ($row = $service->fetch_assoc()) {
                            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                            $_SESSION['selected_service_price']=$row['price'];
                        }
                        ?>
                    </select>
                </div>

                <div id="selected-service-info"></div>

                <div class="form-group">
                    <label for="password">Date:</label>
                    <input type="date" id="date" name="date" placeholder="Enter your date" required>
                </div>
                <div class="form-group">
                    <label for="time">Time:</label>
                    <input type="time" id="time" name="time" placeholder="Enter your time" required>
                </div>
                <div class="form-group">
                    <button type="submit">Make</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    include 'components/footer.php';
    ?>
    <script>
        document.getElementById("service").addEventListener("change", function() {
            var selectedOption = this.value;
            var selectedServiceInfo = "";

            <?php
            $service->data_seek(0); // Reset the result set pointer
            while ($row = $service->fetch_assoc()) {
                echo "if (selectedOption === '" . $row['id'] . "') {";
                echo "    selectedServiceInfo = '<div>Name: " . $row['name'] . "</div><div>Description: " . $row['description'] . "</div><div>Duration: " . $row['duration'] . "</div><div>Price: " . $row['price'] . "</div>';";
                echo "}";
            }
            ?>

            document.getElementById("selected-service-info").innerHTML = selectedServiceInfo;
        });
    </script>
</body>

</html>