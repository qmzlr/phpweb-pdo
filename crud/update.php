<?php
require '../vendor/connect.php';
$sql = 'UPDATE post Set title = :title, content = :content where id =:id';
$startement = $pdo->prepare($sql);
$startement->execute($_POST);
header('Location: ../index.php');
