<?php

session_start();

require "connection.php";

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$gender = $_POST["gender"];

Database::iud("UPDATE `user` SET `first_name` = '$first_name', `last_name` = '$last_name', `email` = '$email', `phone` = '$phone', `gender` = '$gender' WHERE `user`.`id` = " . $_SESSION['user']['id'] . ";");
$_SESSION['user']['first_name'] = $first_name;
$_SESSION['user']['last_name'] = $last_name;
$_SESSION['user']['email'] = $email;
$_SESSION['user']['phone'] = $phone;

header("Location: personal_details.php");