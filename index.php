<?php
    session_start();
    if (!$_SESSION['auth']) {
        header('Location: auth.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Главная</title>
</head>
<body>
    <div class="container header">
        <div class="logo">
            <p>LOGO</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Статьи</a></li>
                <li><a href="#">Добавить статью</a></li>
                <li><a href="#">Тест</a></li>
                <li><a href="#">Тест #2</a></li>
                <li><a href="#">Тест #3</a></li>
            </ul>
        </div>
        <div class="connect">
            <a href="actions/logout.php">Выйти</a>
        </div>
    </div>
    <div class="container main">
        <div class="hello">
            <h1>Привет, <?php echo $_SESSION['name']; ?>!</h1>
        </div>
        <div class="about">
            <p>
                Ты попал на мой сайт! Тут ты можешь читать статьи и даже добавить свою!
            </p>
        </div>
    </div>
</body>
</html>