<?php 

require 'connection.php';

$id = $_GET['id'];

Database::iud("UPDATE `user` SET `type` = 1 WHERE `id` = $id");
header("Location: users.php");