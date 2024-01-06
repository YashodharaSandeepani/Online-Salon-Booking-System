<?php 

require 'connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

Database::iud("UPDATE `beautician` SET `name` = '$name', `email` = '$email', `phone` = '$phone' WHERE `id` = $id");
header("Location: beauticians.php");