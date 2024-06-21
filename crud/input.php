<?php
require '../vendor/connect.php';
$sql = 'INSERT INTO post (`title`, `content`) VALUES (:title,:content)';
$startement = $pdo -> prepare($sql);
$startement -> execute($_POST);
header('Location: ../index.php');
