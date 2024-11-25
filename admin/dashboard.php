<?php
 include 'connect.php';
 
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
    <main class="container mt-4">
     <div class="d-flex flex-row flex-wrap ">

      <div class="card m-3 bg-danger" style="width: 18rem;">
        
        <div class="card-body text-light">
          <h5 class="card-title text-center ">total admin</h5>
          <h2 class="text-center">

            <?php $total = new Total();
            $admin_count = $total->Admin();
            ?>
          </h2>
          <hr>
          <a href="admin-manage.php" class="text-center d-block text-light">See Details</a>
          
        </div>
      </div>

      <div class="card m-3 bg-success" style="width: 18rem;">
        
        <div class="card-body text-light">
          <h5 class="card-title text-center ">total teacher</h5>
          <h2 class="text-center">
          <?php $total = new Total();
            $techer_count = $total->Teacher();
            ?>
          </h2>
          <hr>
          <a href="teacher-manage.php" class="text-center d-block text-light">See Details</a>
          
        </div>
      </div>

      <div class="card m-3 bg-primary" style="width: 18rem;">
        
        <div class="card-body text-light ">
          <h5 class="card-title text-center text-light">total students</h5>
          <h2 class="text-center">
          <?php $total = new Total();
            $student_count = $total->Students();
            ?>
          </h2>
          <hr>
          <a href="#" class="text-center d-block text-light">See Details</a>
          
        </div>
      </div>

     </div>
    </main>
  </div>
</body>
</html>