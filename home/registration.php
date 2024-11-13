<?php
 include 'connect.php';

 require 'login-out.php';

 if(isset($_SESSION["email"])){
  header("location: login.php");
 }

 $register = new Register();

 if(isset($_POST["submit"])){
  $result = $register->registration($_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["phone"],$_POST["type"],$_POST["password"],);

  if($result == 1){
    echo 
    "<script> alert('registration successful'); </script>";
  }

  
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin registration form</title>
    <style>
        .login{
            margin: 100px auto 0;
        }
        .cap{
            text-align: center;
            font-size: 86px;
            color: #d65822;
        }
    </style>
</head>
<body>
    <div class="login container">
        <p class="cap"><i class="fa-solid fa-graduation-cap"></i></p>


        <form class="row g-3" method="post" action="" autocomplete="off">
  <div class="col-md-6 col-12">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationDefault01" placeholder="name" name="firstname" required>
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationDefault02" placeholder=" name" name="lastname" required>
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault03" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="validationDefault03" placeholder=" example@email.com" required>
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault04" class="form-label">Phone number</label>
    <input type="number" class="form-control" name="phone" id="validationDefault04" placeholder=" 0123456789" required>
  </div>
  
  
  <div class="col-md-6 col-12">
    <label for="validationDefault05" class="form-label">Type</label>
    <select class="form-select" id="validationDefault05" name="type" required>
      <option selected disabled value="">Choose...</option>
      <option value="Teacher">teacher</option>
      <option value="Admin">admin</option>
    </select>
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault06" class="form-label">Password</label>
    <input type="password" class="form-control" id="validationDefault06" placeholder=" 12$Abc$" name="password" required>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-unique me-2" type="submit" name="submit">Registration</button>
    <a href="login.php">Login</a>
  </div>
</form>
</div>
</body>
</html>

