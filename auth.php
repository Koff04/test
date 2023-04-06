<?php 
    //Функция выхода
    if($_COOKIE['user'] == 'true')
    setcookie('user', 'true', time() - 3600, '/');
        else
        //Функция входа
        setcookie('user', 'true', time() + 3600, '/');

    header('location: /');
?>