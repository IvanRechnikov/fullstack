<?php

static $conn = new mysqli("localhost", "root", "password", "fullstack");

if ($conn->connect_error) {
    die("Ошибка при подключении к базе данных: " . $conn->connect_error);
}

//Таблица с юзерами
//$sql_acconts = "CREATE TABLE accounts (
//    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    firstname VARCHAR(255) NOT NULL,
//    secondname VARCHAR(255) NOT NULL,
//    lastname VARCHAR(255) NOT NULL,
//    email VARCHAR(255),
//    password VARCHAR(255),
//    group_id INT(6) UNSIGNED,
//    created_at TIMESTAMP,
//    updated_at TIMESTAMP
//)";
//
//

//Таблица с постами
//$sql_articles = "CREATE TABLE articles (
//    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    title VARCHAR(255) NOT NULL,
//    body TEXT NOT NULL,
//    author VARCHAR(255) NOT NULL,
//    created_at TIMESTAMP,
//    updated_at TIMESTAMP
//)";

//if (!$conn->query($sql_articles)) {
//    echo "Ошибка при создании таблицы: " . $conn->error;
//} else {
//    echo "Успешно!";
//}

//$conn->close();