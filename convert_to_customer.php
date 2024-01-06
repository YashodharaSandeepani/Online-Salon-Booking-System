<?php 

require 'connection.php';

$id = $_GET['id'];

Database::iud("UPDATE `user` SET `type` = 0 WHERE `id` = $id");

header("Location: users.php");