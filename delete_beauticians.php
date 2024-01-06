<?php 

require 'connection.php';

$id = $_GET['id'];

Database::iud("DELETE FROM `beautician` WHERE `id` = $id");
header("Location: beauticians.php");