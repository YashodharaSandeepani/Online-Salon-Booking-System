<?php

require 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

Database::iud("INSERT INTO `beautician` (`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone')");
header("Location: beauticians.php");
