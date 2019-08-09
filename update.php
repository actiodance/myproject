<?php
//обновляет edit

require 'database/QueryBuilder.php';

$db = new QueryBuilder;

$data = [
	"id" => $_GET['id'],
	"email" => $_POST['email'],
	"password" => $_POST['password']
];

//$updateTask($data);
$db->update("users", $data);

header("Location: /"); exit;

?>