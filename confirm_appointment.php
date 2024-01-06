<?php 

require 'connection.php';

$id = $_GET['id'];

Database::iud("UPDATE `appointments` SET `status` = 1 WHERE `id` = $id");
header("Location: appointments.php");