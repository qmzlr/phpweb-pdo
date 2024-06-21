<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";
$startement = $pdo->prepare($sql);
$startement->execute();
$row = $startement->rowCount();

if ($row > 0) {
   $user = $startement->fetch(PDO::FETCH_ASSOC);
   $_SESSION['user'] = [
      'id' => $user['id'],
      'full_name' => $user['full_name'],
      'avatar' => $user['avatar'],
      'email' => $user['email'],
   ];
   header('Location: ../index.php');
} else {
   $_SESSION['message'] = 'Неверный логин или пароль';
   header('Location: ../authorization.php');
}
