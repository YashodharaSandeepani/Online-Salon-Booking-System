<?php
session_start();

require 'connection.php';

$id = $_GET['id'];

$beautician = Database::search("SELECT * FROM `beautician` WHERE `id` = $id");
$beautician = $beautician->fetch_assoc();
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
            <h2>Edit Beautician</h2>
            <form action="edit_beauticians_process.php" method="POST">
                <input type="text" name="id" value="<?php echo $beautician['id'] ?>" hidden>
                <div class="form-group">
                    <label for="name">Beautician Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $beautician['name'] ?>" placeholder="Enter your beautician name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" value="<?php echo $beautician['email'] ?>" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" value="<?php echo $beautician['phone'] ?>" placeholder="Enter your phone" required>
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