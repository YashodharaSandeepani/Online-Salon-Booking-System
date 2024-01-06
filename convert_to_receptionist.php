<?php

require 'connection.php';

$id = $_GET['id'];

Database::iud("UPDATE `user` SET `type` = 2 WHERE `id` = $id");

header("Location: users.php");
