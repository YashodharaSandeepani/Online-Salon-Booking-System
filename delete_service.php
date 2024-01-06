<?php 
session_start();

require 'connection.php';

$id = $_GET['id'];

Database::iud("DELETE FROM `service` WHERE `id` = $id");
header("Location: services.php");