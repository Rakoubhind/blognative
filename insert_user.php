<?php
require_once "config.inc.php";
$name = "John Doe";
$email  = "hind@gmail.com";
$password  = password_hash("samplepass123", PASSWORD_BCRYPT);
$created_at  =date("Y-m-d H:i");


$sql = "INSERT INTO `users` (`name`, `email`, `password`, `created_at`) VALUES (:name, :email, :password, :created_at)";
$stmt = $conn->prepare($sql);		
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':created_at', $created_at);
$stmt->execute(); //This will insert a row
print "User $name";
