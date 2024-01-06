<?php
session_start();

require 'connection.php';

$id = $_GET['id'];

$service = Database::search("SELECT * FROM `service` WHERE `id` = $id");
$service = $service->fetch_assoc();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Saloon System</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>

    <?php

    include 'components/admin_header.php';

    ?>

    <div class="content">
        <div class="registration-form">
            <h2>Edit Services</h2>
            <form action="edit_service_process.php" method="POST">
                <input type="text" name="id" value="<?php echo $service['id'] ?>" hidden>
                <div class="form-group">
                    <label for="name">Service Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $service['name'] ?>" placeholder="Enter your service name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" id="description" name="description" value="<?php echo $service['description'] ?>" placeholder="Enter your description" required>
                </div>
                <div class="form-group">
                    <label for="duration">Duration:</label>
                    <input type="text" id="duration" name="duration" value="<?php echo $service['duration'] ?>" placeholder="Enter your duration" required>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" id="price" name="price" value="<?php echo $service['price'] ?>" placeholder="Enter your price" required>
                </div>

                <div class="form-group">

                    <button type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>


    <?php

    include 'components/footer.php';

    ?>

</body>

</html>