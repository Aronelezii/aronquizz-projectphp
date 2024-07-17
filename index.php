<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container text-center">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col">
      <!-- here should be placed login -->
      <form method="post" action="signInLogic.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <input type="submit" name="submit" class="btn btn-primary">
  <hr>
  <a href="signup.php">
    <div class="alert alert-primary" role="alert">Don't have an account?</div>
</a> 
</form>
    </div>
    <div class="col">
     
    </div>
  </div>
</div>
</body>
</html>