<?php
//сохраняет create

require 'database/QueryBuilder.php';

$db = new QueryBuilder;

$data = [
	"email" => $_POST['email'],
	"password" => $_POST['password']
];

//$db->addTask($data);
$db->store("users", $data);

header("Location: /"); exit;
?>