<?php
include_once 'db.php';

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['username']);
$passwd = mysqli_real_escape_string($conn, $_POST['pwd']);


$sql = "INSERT INTO `users`(`first_name`, `last_name`, `user_email`, `uid`, `user_password`) VALUES ('$first', '$last', '$email', '$uid', '$passwd');";
$res = mysqli_query($conn, $sql);

header("Location: ../index.php?signup=Success");
