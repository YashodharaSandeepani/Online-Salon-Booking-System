<?php 

require 'connection.php';

$id = $_GET['id'];

Database::iud("UPDATE `appointments` SET `status` = 2 WHERE `id` = $id");
header("Location: appointments.php");