<?php

require '../vendor/connect.php';
$sql = 'delete from post where id =:id';
$startement = $pdo->prepare($sql);
$startement->execute($_GET);
header('Location: ../index.php');