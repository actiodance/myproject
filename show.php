<?php

require 'database/QueryBuilder.php';

$db = new QueryBuilder;

$id = $_GET['id'];
//$task = $db->getTask($id);
$user = $db->getOne("users", $id);

?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bootstrap 101 Template</title>
  
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">
  </head>



  <body>
<div class="container">
    <div class="row">
      <div class="col-md-12">
          <h1><?= $user['email'];?></h1>
          <p><?= $user['password'];?></p>   
          <a href="/">Go back</a>   
      </div>
    </div>
</div>              
   
        




  </body>
</html>


