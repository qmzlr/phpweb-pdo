<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<form action="vendor/signup.php" method="post" enctype="multipart/form-data">

    <label>ФИО</label>
    <input type="text" name="full_name" placeholder="Введите ФИО">

    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">

    <label>Email</label>
    <input type="text" name="email" placeholder="Введите email">

    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">

    <label>Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">

    <label>Изображение пользователя</label>
    <input type="file" name="avatar">
    <button type="submit"> Зарегистироваться</button>
    <p>
        У вас есть аккаунт? - <a href = "index.php"> авторизироваться </a>
    </p>

       <?php
       if (isset($_SESSION['message'])) {
          echo '<p class="msg">'. $_SESSION['message'] . '</p>';
       }
       unset($_SESSION['message']);
       ?>
</form>

</body>
</html>


