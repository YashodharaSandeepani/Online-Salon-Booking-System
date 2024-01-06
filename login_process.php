<?php

require "connection.php";

if($_SERVER['REQUEST_METHOD']=="POST")
{
		$email = $_POST["email"];
		$password = $_POST["password"];

$user = Database::search("SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");
if ($user->num_rows == 1) {
    session_start();
    $_SESSION["user"] = $user->fetch_assoc();
    if ($_SESSION["user"]["type"] == 0) {
        header("Location: appointment.php");
    } else if ($_SESSION["user"]["type"] == 1) {
        header("Location: admin.php");
    } else {
        header("Location: receptionist.php");
    }
	die;
	} else {
		echo "<script type='text/javascript'>alert('Wrong username or password');</script>";
		die;
	}
}
?>