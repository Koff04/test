<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auth</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
        <?php require "../blocks/header.php"?>
    
                <div class="container mt-4">

                <?php
                    if($_COOKIE['user'] == ''):
                ?>

                <div class="row">
                    <div class="col">
                        <form action="check.php" method="post">
                            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя пользователя"><br>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                            <button class="btn btn-success" type="submit" >Зарегистрироваться</button>
                        </form>
                    </div>
                    
                    <div class="col">
                        <form action="auther.php" method="post">
                            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                            <button class="btn btn-success" type="submit" >Войти</button>
                        </form>
                    </div>
                </div>
                <?php else: ?>
                    <p> Добро пожаловать, <?=$_COOKIE['user']?>.  <a href="exit.php">Выйти</a>.</p>
                <?php endif;?>

                </div>
                <?php require "../blocks/footer.php"?>
</body>
</html>