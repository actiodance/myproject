<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bootstrap 101 Template</title>
  
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>



  <body>
<div class="container">
    <div class="row">
      <div class="col-md-12">
          <h1>Create User</h1>
          <form action="store.php" method="POST">
            <div class="form-group">
             Email: <input type="text" class="form-control" name="email">
            </div>

            <div class="form-group">
             Password: <input type="text" class="form-control" name="password">
            </div>

          <!--  <div class="form-group">
              <textarea name="password" class="form-control">password</textarea>
            </div>-->

            <div class="form-group">
              <button class="btn btn-success" type="submit">Submit</button>
            </div>
          </form>
      </div>
    </div>
</div>              
   
        





  </body>
</html>
