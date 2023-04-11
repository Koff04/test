<?php 

$login = $_POST['login'];
$name = $_POST['name'];
$pass = $_POST['pass'];

if(mb_strlen($login) < 5 || mb_strlen($login) > 21 ){
    echo "Длинна логина недопустима";
    exit();
}   else if (mb_strlen($name) < 3|| mb_strlen($name) > 50 ){
    echo "Длинна имени недопустима";
    exit();
}   else if (mb_strlen($pass) < 8|| mb_strlen($pass) > 32 ){
    echo "Недопустимая длина пароля (от 8 до 32 символов)";
    exit();
}

$pass = md5($pass."polironiodar");

$mysql = new mysqli('localhost','root', '','register-db');
$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
VALUES('$login', '$pass', '$name')");
$mysql->close();

header('Location: auth.php');
?>