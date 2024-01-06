<?php
session_start();
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
            <h2>Add Services</h2>
            <form action="add_service_process.php" method="POST">
                <div class="form-group">
                    <label for="name">Service Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your service name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" id="description" name="description" placeholder="Enter your description" required>
                </div>
                <div class="form-group">
                    <label for="duration">Duration:</label>
                    <input type="text" id="duration" name="duration" placeholder="Enter your duration" required>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" id="price" name="price" placeholder="Enter your price" required>
                </div>

                <div class="form-group">

                    <button type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>


    <?php

    include 'components/footer.php';

    ?>

</body>

</html>