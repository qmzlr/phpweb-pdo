<?php
require '../vendor/connect.php';

    $sql = "SELECT * FROM post where id=:id";
    $statement = $pdo -> prepare($sql);
    $statement -> execute($_GET);
    $post = $statement -> fetch(Pdo::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="update.php" method="post">
    <p>Изменение статьи</p>
    <input type="hidden" name="id" value="<?php echo $post['id']?>">
    <div><input type="text" name="title" value="<?php echo $post['title']?>">
    </div>
    <div><input type="text" name="content" value="<?php echo $post['content']?>"></div>
    <input type="submit" value="Отредактировать">
</form>
</body>
</html>