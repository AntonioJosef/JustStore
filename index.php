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
          <form class="input-group border rounded-sm" action="search.php">
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
    
    <div class="content">
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner w-75 mx-auto">
          <div class="carousel-item active" data-interval="10000">
            <img src="https://images.squarespace-cdn.com/content/v1/55b94d4be4b04056f515f931/1539443151985-H1A13GHICTUG2EQ7EBJZ/ke17ZwdGBToddI8pDm48kDyfoT9zFyQbWaHJZ4ufnBtZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpw-UbfU9HRDkN41o1cTVCdLhFLx93xXoh9_5UrhFactqlw3t4QqBPAfs6OT5GQCRK8/Promotion+image.jpg" class="d-block w-70 mx-auto rounded-lg" alt="...">
          </div>
          <div class="carousel-item" data-interval="2000">
            <img src="https://www.napiermkt.com/uploads/1/0/9/8/10981970/published/promotion-image-sm_3.jpg?1559742827" class="d-block w-70 mx-auto rounded-lg" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://avonladynj.com/wp-content/uploads/2020/06/240_F_262035364_gGi8uJsPl9uljis8C6oxI0w6AM7MKDLq.jpg" class="d-block w-70 mx-auto rounded-lg" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>