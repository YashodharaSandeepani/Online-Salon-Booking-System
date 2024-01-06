<?php 
require 'connection.php';

$name = $_POST['name'];
$description = $_POST['description'];
$duration = $_POST['duration'];
$price = $_POST['price'];

Database::iud("INSERT INTO `service` (`name`, `description`, `duration`, `price`) VALUES ('$name', '$description', '$duration', '$price')");
header("Location: services.php");
?>