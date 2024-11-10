<?php

use LDAP\Result;
 include 'connect.php';

 require 'login-out.php';

 if(isset($_SESSION["email"])){
  header("location: ../admin/dashboard.php");
 }

 $login = new Login();

 if(isset($_POST["login"])){
  $result = $login->login($_POST["email"],$_POST["password"] );

  if($result == 1){
    $_SESSION["login"]= true;
    $_SESSION["email"]= $login->email();
    header("location: ../admin/dashboard.php");
  }
 }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login form</title>
    <style>
        .login{
            margin: 150px auto;
        }
        .user{
            text-align: center;
            font-size: 86px;
            color: #d65822;
        }
    </style>
</head>
<body>
    <div class="login container">
        <p class="user"><i class="fa-solid fa-user"></i></p>
<form class="m-auto" method="post" autocomplete="off">
  <div class="row m-4">
    <label for="inputEmail3" class="col-sm-2 center  col-form-label">Email</label>
    <div class="col-sm-8">
      <input type="email" name="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row m-3">
    <label for="inputPassword3" class="col-sm-2   center col-form-label">Password</label>
    <div class="col-sm-8">
      <input type="password" name="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  

  <button type="submit" name="login" class="btn btn-unique m-4">Sign in</button>
  <a href="registration.php">yet not register, Please registration</a>
</form>
</div>
</body>
</html>

