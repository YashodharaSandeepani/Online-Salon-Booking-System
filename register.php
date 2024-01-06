<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Saloon System</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
	
	<script>
		function myFunction() {
		  var x = document.getElementById("email").pattern;
		  document.getElementById("demo").innerHTML = x;
		}
	</script>
</head>

<body>

    <?php

    include 'components/header.php';

    ?>

    <div class="content">
        <div class="registration-form">
            <h2>Registration</h2>
            <form action="register_process.php" method="POST">
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" pattern="[a-z0-9]+@[a-z]+\.[a-z]{3}"
					title="Example:abc123@gmail.com" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter your phone number" pattern="[0-9]{10}" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="female">Female</option>
						<option value="male">Male</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="form-group">

                    <button onclick="myFunction()" type="submit">Register</button>
					<p id="demo"></p>
                </div>
                <div>
                    <a href="login.php">Already have an account?</a>
                </div>
            </form>
        </div>
    </div>


    <?php

    include 'components/footer.php';

    ?>

</body>

</html>