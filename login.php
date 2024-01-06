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

  include 'components/header.php';

  ?>

  <div class="content">
    <div class="login-form">
      <h2>Login</h2>
      <form action="login_process.php" method="post">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
          <button type="submit">Login</button>
        </div>
        <div>
          <a href="register.php">Don't have an account?</a>
        </div>
      </form>
    </div>
  </div>


  <?php
  include 'components/footer.php';
  ?>
</body>

</html>