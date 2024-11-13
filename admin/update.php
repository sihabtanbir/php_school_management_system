<?php
 require 'connect.php';
//  require '../home/login-out.php';
// $select = new select();

// if(isset($_SESSION["email"])){
//   $user = $select->Email($_SESSION["email"]);
//   $result = mysqli_fetch_array($user);

// }else{
 
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="back-styles.css">
</head>
<body>
  <!-- header  -->
  <?php  include 'header.php'; ?>


  <div class="main-content d-flex">
    <!-- aside  -->
     <?php  include 'aside.php'; ?>
    <main>
      <h2 class="text-center p-2">Update your profile</h2>
     <div class="container row ">
     <div class="col-6">
     <form class="row g-3" method="post" action="" autocomplete="off">
  <div class="col-md-6 col-12">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationDefault01" placeholder="name" name="firstname" >
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationDefault02" placeholder=" name" name="lastname" >
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault03" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="validationDefault03" placeholder=" example@email.com" >
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault04" class="form-label">Phone number</label>
    <input type="number" class="form-control" name="phone" id="validationDefault04" placeholder=" 0123456789" >
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault05" class="form-label">Phone number</label>
    <textarea name="address" id="" placeholder="write your address" class="p-2"></textarea>
    
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault06" class="form-label">Your image</label>
    <input type="file"  alt="your image"  width="48" height="48" >
  </div>
  
  

 

  
  <div class="col-12">
    <button class="btn btn-unique me-2" type="submit" name="update">Update</button>
   
  </div>
</form>
</div>

<div class="col-4">
<div class="col-md-6 col-12">
    <label for="validationDefault06" class="form-label">Password</label>
    <input type="password" class="form-control" id="validationDefault06" placeholder=" 12$Abc$" name="password" >
  </div>
</div>

</div>
    </main>
  </div>
</body>
</html>