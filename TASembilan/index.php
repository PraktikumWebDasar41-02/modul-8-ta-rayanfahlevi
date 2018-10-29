<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>regis</title>
  </head>
  <body>
    <form method="POST" >
 
  <div class="form-group col-form-label row" >
      <label for="formGroupExampleInput" class="col-sm-1 col-form-label">Username</label>
      <div class="col-md-4">
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="username" name="user">
      </div>
      <div class="col-md">
        
      </div>
  </div>

  <div class="form-group col-form-label row" >
    
      <label for="exampleInputPassword1" class="col-sm-1 col-form-label">Password</label>
  
    <div class="col-md-4">
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
    </div>
    <div class="col-md">
      
    </div>
  </div>
  

  <button type="submit"  class="btn btn-primary" name="submit">Submit</button>
  
    <div class="card-body">
    <a href="regis.php" class="card-link">register</a>
  </div>

</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
include 'koneksi.php';

if (isset($_POST['submit'])) {
  session_start();
  $que = mysqli_query($conn,"SELECT * FROM user");
  while ($acc = mysqli_fetch_array($que)) {
    if ($acc['name']==$_POST['user']&&$acc['pass']==$_POST['pass']) {
      $_SESSION['user'] = $acc['user'];
      $_SESSION['id'] = $acc['id'];
      header("Location:dashboard.php");
    }
  }
}
 ?>