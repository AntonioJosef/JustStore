<?php
  include("db.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <style>
      .leftContent
      {
        padding-left: 55px;
      }
    </style>

    <title>JustStore</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light shadow p-3 mb-5 bg-white d-flex bd-highlight sticky-top">
        <div class="p-2 bd-highlight">
          <a class="navbar-brand text-warning font-weight-bold" href="index.php">JustStore</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="p-0 flex-fill bd-highlight">
          <form class="input-group border rounded-sm">
            <input class="form-control border-0" type="text" placeholder="Search..." aria-label="Search">
            <button class="btn bg-transperent" type="submit"><i class="fas fa-search text-warning" aria-hidden="true"></i></button>
          </form>
        </div>
        </div>
        <div class="ml-auto p-2 bd-highlight">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active border border-warning rounded-sm mr-sm-2 text-center" style="width: 4rem;">
                <a class="nav-link text-warning" href="login.php">Login</a>
              </li>
              <li class="nav-item border border-warning rounded-sm bg-warning text-center" style="width: 5rem;">
                <a class="nav-link text-white" href="register.php">Register</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    
    <div class="content d-flex flex-row bd-highlight mb-3">
      <div class="p-0 bd-highlight w-25 h-100">
        <div class="leftContent">
          <h4>Sorting</h4>
          
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>