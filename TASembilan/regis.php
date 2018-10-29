<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Registrasi</title>
  </head>
  <body>
    <form method="POST" action="simpan.php">
  <div class="form-group">
    <label for="exampleInputEmail1" class="col-md-2 col-form-label">Email</label>
    <input type="email" class=" col-sm-5 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group ">
    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Username</label>
    <input type="text" class="col-sm-5" id="formGroupExampleInput" placeholder="Example input" name="user">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Password</label>
    <input type="password"  class="col-sm-5" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Re-type</label>
    <input type="password"  class="col-sm-5" id="exampleInputPassword1" placeholder="Re-Password" name="repas">
  </div>

  <button type="submit" class="btn btn-primary" name="send">Submit</button>
  <div class="card-body">
    <a href="index.php" class="card-link">Login</a>
  </div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
