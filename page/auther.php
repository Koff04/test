<?php 
$login = $_POST['login'];
$pass = $_POST['pass'];

$pass = md5($pass."polironiodar");

$mysql = new mysqli('localhost','root', '','register-db');
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if(count($user) == 0) {
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $user['name'], time() + 120, "/");

$mysql->close();

header('Location: auth.php');
?>