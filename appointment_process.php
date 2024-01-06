<?php

session_start();

include "connection.php";

$user_id = $_POST["user_id"];
$service = $_POST["service"];
$time = $_POST["time"];
$date = $_POST["date"];

Database::iud("INSERT INTO `appointments` (`user_id`, `service_id`, `date`,`time`) VALUES ('$user_id', '$service', '$date','$time')");

$service_data = Database::search("SELECT * FROM `service` WHERE `id` = $service");


$data = $service_data->fetch_assoc();

$_SESSION['appointment_date'] = $date;
$_SESSION['appointment_time'] = $time;
$_SESSION['service_id'] = $service;
$_SESSION['service_name'] = $data['name'];
header("Location: personal_details.php");
