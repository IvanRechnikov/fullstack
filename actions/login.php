<?php

include '../database/database.php';

$login = $_POST['login'];
$password = $_POST['password'];

$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "SELECT * FROM accounts WHERE email = '$login'";

if (!$conn->query($sql)) {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$result = $conn->query($sql);
$row = $result->fetch_assoc();

session_start();

$_SESSION['id'] = $row['id'];
$_SESSION['name'] = $row['firstname'];
$_SESSION['lastname'] = $row['lastname'];
$_SESSION['auth'] = true;

header('Location: ../index.php');