<?php 

//подключаемся к базе данных
$pdo = new PDO("mysql:host=127.0.0.1; dbname=myproject", "root", "");
//подготавливаем запрос
$statement = $pdo->prepare("SELECT * FROM users");
$statement->execute();
$users = $statement->fetchALL(PDO::FETCH_ASSOC);
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
              <h1>Users management</h1>
              <a href="create.php" class="btn btn-success">Add user</a>
              <table class="table">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
                </tr>  
                </thead> 

                <tbody>
                <?php foreach($users as $user): ?>
                
            
                  <tr>
                    <td><?= $user['id'];?></td>
                    <td><?= $user['name'];?></td>
                    <td><?= $user['email'];?></td>
                    <td><?= $user['password'];?></td>
                  <td>
                      <a href="#" class="btn btn-warning">
                      Edit
                      </a>
                      <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                <?php endforeach; ?>

                </tbody> 
          </div>
      </div> 
  </div>








    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>
  </body>
</html>