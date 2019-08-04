<?php

$data = [
    "id" => $_GET['id'],
    "name" => $_POST['name'],
    "email" => $_POST['email'],
    "password" => $_POST['password']
];
$pdo = new PDO("mysql:host=127.0.0.1; dbname=myproject", "root", "");
$sql = 'UPDATE users SET name=:name, email=:email, password=:password WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->execute($data);

header("Location: /"); exit;
?>