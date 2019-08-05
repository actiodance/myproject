<?php
$id = $_GET['id'];
$sql = 'DELETE FROM users WHERE id=:id';
$pdo = new PDO("mysql:host=127.0.0.1; dbname=myproject", "root", "");
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $id);
$statement->execute();

header('Location: /');
?>