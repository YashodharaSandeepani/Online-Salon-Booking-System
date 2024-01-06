<?php
session_start();

require "connection.php";

$cardNumber = $_POST["cardNumber"];
$cardName = $_POST["cardName"];
$expiryDate = $_POST["expiryDate"];
$cvv = $_POST["cvv"];
$cardHolderName = $_POST["cardName"] ;
$paymentAmount = $_POST["paymentAmount"];
$user_id = intval($_SESSION["user_id"]);

Database::iud("INSERT INTO payment (`user_id`,`cardholder_name`,`amount`) VALUES ('$user_id', '$cardHolderName','$paymentAmount')");

$_SESSION["payment_id"] = Database::getLastInsertedId();
$_SESSION["payment_amount"] = $paymentAmount;

header("Location: overview.php?success=true");

