<?php
    include("session.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>Register | JustStore</title>
  </head>
  <body>
    <div class="container w-50">
      <h3><a class="text-decoration-none font-weight-bold d-flex justify-content-center" href="index.php">JustStore</a></h3>
      <div class="shadow p-3 mb-5 bg-white">
        <div class="border-bottom border-warning">
          <h3 class="font-weight-bold">Register</h3>
          <h5>Already have JustStore account? <a href="login.php" class="text-primary">Login</a></h5>
        </div>
        <form method="POST" action="register_action.php" class="justify-content-center mt-3" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="e.g. John Doe" required="required" name="name" id="name">
            </div>
          </div>
          <div class="form-group row">
            <label for="gender" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="option1" required="required">
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="gender" value="option2" required="required">
                  <label class="form-check-label" for="inlineRadio2">Female</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="addess" class="col-form-label">Address</label>
            <div class="w-100">
                <textarea class="form-control" id="address" name="address" rows="3" placeholder="Address" require="requierd" required="required"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="e.g. 085716343xxx" required="required" name="phone" id="phone">
            </div>
          </div>
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
          <div class="form-group row">
            <label for="re-password" class="col-sm-2 col-form-label">Re-Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" placeholder="Confirm Password" required="required" name="re-password" id="re-password">
            </div>
          </div>
          <div class="form-group row">
            <label for="profilepicture" class="col-sm-2 col-form-label">Profile Picture</label>
            <div class="col-sm-10">
              <div class="border rounded">
              <input type="file" class="form-control" value="Choose File" name="profilepicture" id="profilepicture">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="w-100 ml-3 mr-3">
              <button type="submit" class="btn btn-warning text-white w-100" id="submitBtn">Register</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
  </body>
</html>
<script type = "text/javascript">
    function validation() {
        let name = document.getElementById("name").value;
        let address = document.getElementById("address").value;
        let phone = document.getElementById("phone").value;
        let password = document.getElementById("password").value;
        let repassword = document.getElementById("re-password").value;
        if(name.length < 3)
        {
            alert("Name minimum 3 character");
            return false;
        }
        if(address.length < 10)
        {
            alert("Address minimum 10 character");
            return false;
        }
        if(isNaN(phone) || phone.length < 10)
        {
            alert("Phone numeric except the '+' symbol and minimum 10 character");
            return false;
        }
        if(password.length < 6)
        {
            alert("password minimum 6 character");
            return false;
        }
        if(password != repassword)
        {
            alert("Password not match");
            return false;
        }
        return true;
    }
    document.getElementById("submitBtn").onclick = function (){
        if(validation()){
            let inputanNama = document.getElementById("inputNama").value;
            console.log(inputanNama);
            console.log("ini adalah value dari gender 1: "  +document.getElementById("genderSelect2").value)
            alert("Form Submit Success!");
        } else {
            <?php
                echo mysqli_error($database);
            ?>
        }
    }
</script>