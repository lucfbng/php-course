<?php
require 'config/db.php';

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$password_hash = password_hash($password, PASSWORD_DEFAULT);
$creation_date = new DateTime();
$creation_date = $creation_date->format('Y-m-d H:i:s');

$sql = "INSERT INTO _user (user_mail, user_password, user_date) VALUES (:email, :password, :date)";
$stmt = $db->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':password', $password_hash);
$stmt->bindValue(':date', $creation_date);
$stmt->execute();

header('Location: index.php');
