<?php

include '../database/database.php';

$name = strtoupper($_POST['firstName']);
$secondName = strtoupper($_POST['secondName']);
$lastName = strtoupper($_POST['lastName']);
$email = $_POST['email'];
$password = $_POST['password'];
$created_at = date("Y-m-d H:i:s");
$updated_at = date("Y-m-d H:i:s");

$password = password_hash($password, PASSWORD_DEFAULT);

$value = [$name, $secondName, $lastName, $email, $password, $created_at, $updated_at];

$sql = "INSERT INTO accounts (firstname, secondname, lastname, email, password, group_id, created_at, updated_at) VALUES ('$name','$secondName','$lastName','$email','$password',1,'$created_at','$updated_at')";

if (!$conn->query($sql)) {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

session_start();

$_SESSION['name'] = $name;
$_SESSION['secondName'] = $secondName;
$_SESSION['lastName'] = $lastName;
$_SESSION['auth'] = true;

header('Location: ../index.php');
