<?php

    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $pass = md5($pass.'111222333');

    $mysql = new mysqli('localhost', 'phpmyadmin', '010798','register_bd');
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();
    if ($user == null) {
        echo ("Неверный логин или пароль.");
        exit();
    }

    setcookie('user', $user['name'], time() + 1800, "/");




    $mysql->close();

    header('Location: /?url=main');
?>