<?php
session_start();
if (!isset($_SESSION['user'])){
   header('location: ../index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Профиль</title>
</head>
<body>
   <div class="profile">
      <h2>Профиль пользователя</h2>
      <img src="<?=$_SESSION['user']['avatar'] ?>" alt="Аватар пользователя" class="avatar">
      <p>Ваш Email: <?php echo $_SESSION['user']['email'];?></p>
      <p>Ваше ФИО: <?php echo $_SESSION['user']['full_name'];?></p>
      <a href="vendor/logout.php">Выход</a>
   </div>
</body>
</html>
