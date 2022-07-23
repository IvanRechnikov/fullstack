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
    <script src="assets/js/register.js"></script>
    <link rel="stylesheet" href="assets/css/register.css">
    <link rel="stylesheet" href="assets/css/auth-register.css">
    <link rel="stylesheet" href="assets/fonts/mukta.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="container register">
        <form action="actions/add_account.php" method="post" class="form">
            <div class="header">
                <h1>Регистрация</h1>
            </div>
            <div class="blocks">
                <div class="fio-input">
                    <div class="last-name">
                        <span>Фамилия</span>
                        <input type="text" placeholder="Иванов" name="lastName" id="lastName">
                    </div>
                    <div class="first-name">
                        <span>Имя</span><br>
                        <input type="text" placeholder="Иван" name="firstName" id="firstName">
                    </div>
                    <div class="second-name">
                        <span>Отчество</span>
                        <input type="text" placeholder="Иванович" name="secondName" id="secondName">
                    </div>
                </div>
                <div class="block">
                    <div class="email-input">
                        <span>Email</span>
                        <input type="email" placeholder="ivan@localhost.ru" name="email" id="email">
                    </div>
                    <div class="password-input">
                        <span>Пароль</span>
                        <input type="password" name="password" id="password" placeholder="top secret">
                        <span>Подтвердите пароль</span>
                        <input type="password" name="confirm-password" id="confirm-password">
                    </div>
                </div>
            </div>
            <div class="button-submit">
                <button type="button" id="checkFields">Зарегистрироваться</button>
            </div>
            <div class="to-auth">
                <a href="auth.php">Уже есть аккаунт? Авторизируйтесь!</a>
            </div>
        </form>
    </div>
</body>
</html>