<?php

require 'connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$duration = $_POST['duration'];
$price = $_POST['price'];

Database::iud("UPDATE `service` SET `name` = '$name', `description` = '$description', `duration` = '$duration', `price` = '$price' WHERE `id` = $id");
header("Location: services.php");
