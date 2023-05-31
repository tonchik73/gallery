<?php

    $name = $_POST['name'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    echo($name);
    echo($login);
    echo($pass);

    $pass = md5($pass.'111222333');

    $mysql = new mysqli('localhost', 'phpmyadmin', '010798','register_bd');
    $mysql->query("INSERT INTO `users`(`name`, `login`, `pass`) VALUES ('$name', '$login', '$pass')");
    $mysql->close();

    header('Location: /?url=enter');
?>