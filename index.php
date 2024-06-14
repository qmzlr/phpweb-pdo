<!--
1. Подготовить хранилище (массив, а потом подключимся к БД)
2. вывести список данных через foreach

1. Подключится к БД +
2. Сделать запрос select+
3. Получить результат
4. Передать данные в переменную $posts

-->
<?php
session_start();
//Подключится к БД
require 'crud/connect.php';

//Сделать запрос select
$sql = "SELECT * FROM post";
$statement = $pdo->prepare($sql);
$statement->execute();

//3. Получить результат
//4. Передать данные в переменную $posts
$posts = $statement->fetchAll(Pdo::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>
      Изучение CRUD
   </title>
   <meta name="description" content="Chartist.html">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
   <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
   <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
   <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
   <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
   <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
   <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
   <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
   <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">

</head>
<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">
   <div class="col-md-6">
      <div id="panel-1" class="panel">
         <div class="panel-hdr">
            <h2>
               Список статей
            </h2>
            <div class="panel-toolbar">
               <button><a href="/profile.php">Профиль</a></button>
            </div>
         </div>
         <div class="panel-container show">
            <div class="panel-content">
               <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g">

                  <?php foreach ($posts as $post): ?>
                     <h3><?php echo $post['title'] ?></h3>
                     <p>
                        <?php echo $post['content'] ?>
                     </p>
                     <?php
                     if (isset($_SESSION['user'])) { ?>
                        <a href="#" class="btn btn-info"> Просмотр</a>
                        <a href="crud/editor.php?id=<?php echo $post['id'] ?>" class="btn btn-warning">
                           Редактирование</a>
                        <a href="crud/delete.php?id=<?php echo $post['id'] ?>" class="btn btn-danger"> Удаление</a>
                        <br><br>
                     <?php }

                  endforeach; ?>

               </div>
               <?php if (isset($_SESSION['user'])) { ?>
               <a href="crud/add.php" class="btn btn-success">Добавить статью</a>
                <?php }?>
            </div>
         </div>
      </div>
   </div>
</main>

</body>
</html>
