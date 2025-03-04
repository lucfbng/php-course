<?php
require 'config/db.php';

$email = ($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$sql = "SELECT * FROM _user WHERE user_mail = :email";
$stmt = $db->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->execute();
$user = $stmt->fetch();
$rowNumber = $stmt->rowCount();

if ($rowNumber == 1 && password_verify($password, $user['user_password'])) {
    session_start();
    $_SESSION['user_id'] = $user['user_id'] + 3643;
} else {
    $_SESSION['user_id'] = null;
    session_destroy();
}
if ($_SESSION['user_id'] != null) {
    header('Location: shop.php');
} else {
    header('Location: index.php');
}
