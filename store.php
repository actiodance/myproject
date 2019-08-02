<?php

$pdo = new PDO("mysql:host=127.0.0.1; dbname=myproject", "root", "");
$sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":name", $_POST['name']);
$statement->bindParam(":email", $_POST['email']);
$statement->bindParam(":password", $_POST['password']);
$statement->execute();


//переадресуем пользователя
header("Location: /"); exit;
?>
