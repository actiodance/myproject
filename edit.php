
<?php
//показывает

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
          <h1>Edit User</h1>
          <form action="update.php?id=<?= $user['id'];?>" method="POST">
            <!-- <input type="text" name="id" value="--><?//= $task['id'];?><!--">-->
            <div class="form-group">
              <input type="text" name="email" class="form-control" value="<?= $user['email'];?>">
            </div>

            <div class="form-group">
              <input type="text" name="password" class="form-control" value="<?= $user['password'];?>">
            </div>

            <!--<div class="form-group">
              <textarea name="password" class="form-control"><?= $user['password'];?></textarea>
            </div>-->

            <div class="form-group">
              <button class="btn btn-warning" type="submit">Submit</button>
            </div>
          </form>
      </div>
    </div>
</div>              
   
        





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>
  </body>
</html>
