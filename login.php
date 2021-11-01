<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container w-25">
      <h3><a class="text-decoration-none font-weight-bold d-flex justify-content-center" href="index.php">JustStore</a></h3>
      <div class="shadow p-3 mb-5 bg-white">
        <div class="border-bottom border-warning">
          <h3 class="font-weight-bold">Login</h3>
          <h5>Don't have JustStore account? <a href="register.php" class="text-primary">Register</a></h5>
        </div>
        <form method="POST" action="login_action.php" class="justify-content-center mt-3" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" placeholder="example@email.com" required="required" name="email" id="email">
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" placeholder="Password" required="required" name="password" id="password">
            </div>
          </div>
          <div class="custom-control custom-checkbox mb-2">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Remember me</label>
          </div>
          <div class="form-group row">
            <div class="w-100 ml-3 mr-3">
              <button type="submit" class="btn btn-warning text-white w-100" id="submitBtn">Login</button>
            </div>
          </div>
          <div class="container w-100 text-center">
              <a href="forget_password.php">Forget Password?</a>
          </div>
        </form>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  </body>
</html>