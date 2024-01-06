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
            <h2>Add Beautician</h2>
            <form action="add_beauticians_process.php" method="POST">
                <div class="form-group">
                    <label for="name">Beautician Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your beautician name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter your phone" required>
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