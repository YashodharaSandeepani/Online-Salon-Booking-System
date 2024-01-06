<?php
session_start();

include "connection.php";
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
        <div class="registration-form">
            <h2>Personal Details</h2>
            <form action="update_details.php" method="POST">
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name" value="<?php echo $_SESSION['user']['first_name'] ?>" placeholder="Enter your first name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" value="<?php echo $_SESSION['user']['last_name'] ?>" placeholder="Enter your last name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $_SESSION['user']['email'] ?>" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" value="<?php echo $_SESSION['user']['phone'] ?>" placeholder="Enter your phone number" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="male" <?php if ($_SESSION['user']['gender'] == 'male') {
    echo ' selected';
}
?>>Male</option>
                        <option value="female" <?php if ($_SESSION['user']['gender'] == 'female') {
    echo ' selected';
}
?>>Female</option>
                        <option value="other" <?php if ($_SESSION['user']['gender'] == 'other') {
    echo ' selected';
}
?>>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit">update</button>
                    <a class="button-block" href="payment.php">Next</a>
                </div>
            </form>
        </div>
    </div>

<br>
<br>
<br>
    <?php

include 'components/footer.php';

?>

</body>

</html>