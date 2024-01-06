<?php
require "connection.php";

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$gender = $_POST["gender"];

if ($first_name == "" || $last_name == "" || $email == "" || $phone == "" || $password == "" || $gender == "") {
    echo "Please fill all the fields";
    return;
} else {
    // Check if email already exists in the database
    $resultset = Database::search("SELECT * FROM `user` WHERE `email` = '$email'");
    if ($resultset->num_rows > 0) {
        echo "<script type='text/javascript'>alert('Email already exists!');</script>";
		die;
    }

    // Email doesn't exist, insert the new user
    Database::iud("INSERT INTO `user` (`first_name`, `last_name`, `email`, `phone`, `password`, `gender`) VALUES ('$first_name', '$last_name', '$email', '$phone', '$password', '$gender')");
    header("Location: login.php");
}

?>





