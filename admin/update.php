<?php
 require 'connect.php';

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
  <?php $catchpass = $user['password']; ?>


  <div class="main-content d-flex">
    <!-- aside  -->
     <?php  include 'aside.php'; ?>
    <main>
      <h2 class="text-center p-2">Update your profile</h2>
     <div class="container row ">
     <div class="col-12 col-lg-6">
     <form class="row g-3" method="post" action="" autocomplete="on">
  <div class="col-md-6 col-12">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationDefault01" value="<?php echo $user['firstname'] ?>" name="firstname" >
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationDefault02" value="<?php echo $user['lastname'] ?>" name="lastname" >
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault03" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="validationDefault03" value="<?php echo $user['email'] ?>" >
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault04" class="form-label">Phone number</label>
    <input type="number" class="form-control" name="phone" id="validationDefault04" value="<?php echo $user['phone'] ?>" >
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault05" class="form-label">Your Address</label>
    <textarea name="address" id="" value="" class="p-2"> <?php echo $user['address'] ?> </textarea>
    
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault06" class="form-label">Your image</label>
    <input type="file"  alt="your image"  width="48" height="48" name="image">
  </div>
  
  
    <button class="btn btn-unique me-2" type="submit" name="update1" onclick='window.location.reload(true);'>Update</button>
   
 
</form>
</div>
<div class="col-12 col-lg-2"> </div>

<div class="col-12 col-lg-4">
<form class="row g-3" method="post" action="" autocomplete="on">
  
  <div class="col-md-6 col-12">
  
    <label for="validationDefault01" class="form-label">Old password</label>
    <input type="password" class="form-control" id="validationDefault01" name="oldpassword" placeholder="old password" >
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault01" class="form-label">New passworde</label>
    <input type="password" class="form-control" id="validationDefault01"  name="newpassword" placeholder="New password">
  </div>

    <button class="btn btn-unique me-2" type="submit" name="password">Change password</button>

</form>
</div>

</div>
    </main>
  </div>

  <?php
 require 'db_connect.php' ;

 if(isset($_POST['update1'])){
  $update11 = "UPDATE users SET firstname='$_POST[firstname]', lastname='$_POST[lastname]', email='$_POST[email]', phone='$_POST[phone]', address='$_POST[address]', image='$_POST[image]' where email='$user[email]' ";
  $updatequery =mysqli_query($connect, $update11);

  
    // echo '<script>alert("update successfully")</script>' ;

 }

 if(isset($_POST['password'])){
  $password = $_POST['oldpassword'];
  $newpassword = $_POST['newpassword'];

 echo $catchpass;

  if($catchpass == $password){
    $update12 = "UPDATE users SET password='$_POST[newpassword]' where email='$user[email]' ";
    $updatequery =mysqli_query($connect, $update12);
    echo '<script>alert("update successfully")</script>' ;
  }
  else{
    echo '<script>alert("password not match")</script>' ;
  }
 }

?>
</body>
</html>

