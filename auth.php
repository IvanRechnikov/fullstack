<?php
    session_start();
    if ($_SESSION['auth']) {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/auth.js"></script>
    <link rel="stylesheet" href="assets/css/auth.css">
    <link rel="stylesheet" href="assets/css/auth-register.css">
    <link rel="stylesheet" href="assets/fonts/mukta.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="container auth">
        <form action="actions/login.php" method="post" class="auth-form">
            <div class="header">
                <h1>Авторизация</h1>
            </div>
            <div class="login">
                <span>Введите логин</span>
                <input type="email" name="login" id="email" placeholder="ivan@localhost.ru">
            </div>
            <div class="password">
                <span>Введите пароль</span>
                <input type="password" name="password" id="password" placeholder="ivan123">
            </div>
            <div class="button-submit">
                <button type="button" id="checkFields">Войти</button>
            </div>
            <div class="to-register">
                <a href="register.php">Нет аккаунта? Зарегистрируйтесь!</a>
            </div>
        </form>
    </div>
</body>
</html>