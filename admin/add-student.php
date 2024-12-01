<?php
 include 'connect.php';
 $connect =mysqli_connect("localhost", "root", "", "sms");

 if(isset($_POST['student'])){
    $name = $_POST['name'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $kind = $_POST['kind'];
    $roll = $_POST['roll'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $image = $_POST['image'];
    $birth = $_POST['birth'];
    $birth_number = $_POST['birth_number'];

    $insert5 = "INSERT INTO students VALUES('','$name', '$class', '$section', '$kind', '$roll', '$email', '$phone', '$image', '$birth', '$birth_number')";
    $run1= mysqli_query($connect, $insert5);


    $insert2 = "INSERT INTO students_mark(id,name, class, section,roll)VALUES('','$name', '$class', '$section', '$roll')";
    mysqli_query($connect, $insert2);

    echo "<script>alert('student add successful')</script>";
 }
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
        <h2 class="m-2 text-center">Add Student</h2>
      <div class="container">
    <form class="row g-3" method="post" action="" autocomplete="off">
  <div class="col-md-6 col-12" style="text-transform: capitalize;">
    <label for="validationDefault01" class="form-label">Full name</label>
    <input type="text" class="form-control" id="validationDefault01" placeholder="Hasan Ali" name="name" required style="text-transform: capitalize;">
  </div>

  <div class="col-md-6 col-12">
    <label for="validationDefault02" class="form-label">Class</label>
    <select class="form-select" id="validationDefault02" name="class" required>
      <option selected disabled value="">Choose...</option>
      <option value="one">one</option>
      <option value="two">two</option>
      <option value="three">three</option>
      <option value="four">four</option>
      <option value="five">five</option>
      <option value="six">six</option>
      <option value="seven">seven</option>
      <option value="eight">eight</option>
      <option value="nine">nine</option>
      <option value="ten">ten</option>
    </select>
  </div>

  <div class="col-md-6 col-12">
    <label for="validationDefault03" class="form-label">Section</label>
    <select class="form-select" id="validationDefault03" name="section" required>
      <option selected disabled value="">Choose...</option>
      <option value="A">A</option>
      <option value="B">B</option>
    </select>
  </div>

  <div class="col-md-6 col-12">
    <label for="validationDefault04" class="form-label">Kind</label>
    <select class="form-select" id="validationDefault04" name="kind" required>
      <option selected disabled value="">Choose...</option>
      <option value="boy">boy</option>
      <option value="girl">girl</option>
    </select>
  </div>

  <div class="col-md-6 col-12">
    <label for="validationDefault05" class="form-label">Roll</label>
    <input type="text" class="form-control" id="validationDefault05" placeholder=" 01" name="roll" required>
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault06" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="validationDefault06" placeholder=" if here" >
  </div>
  <div class="col-md-6 col-12">
    <label for="validationDefault07" class="form-label">Phone number</label>
    <input type="number" class="form-control" name="phone" id="validationDefault07" placeholder=" 0123456789" required>
  </div>
  
  
  
  <div class="col-md-6 col-12">
    <label for="validationDefault08" class="form-label">Image</label>
    <input type="file" class="form-control" id="validationDefault08"  name="image" >
  </div>

  <div class="col-md-6 col-12">
    <label for="validationDefault09" class="form-label">Birth Date</label>
    <input type="date" class="form-control" name="birth" id="validationDefault09" placeholder=" 01/01/2001" required>
  </div>

  <div class="col-md-6 col-12">
    <label for="validationDefault077" class="form-label">Birth Number</label>
    <input type="number" class="form-control" name="birth_number" id="validationDefault077" placeholder=" 2000.........." required>
  </div>

  
  </div>
  <div class="col-12">
    <button class="btn btn-unique m-2" type="submit" name="student">Add student</button>
    
  </div>
</form>
</div>
    </main>
  </div>
</body>
</html>