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
    <main>
        <div class="search container  m-3">



        <form method="post">
    <div class="row">
  <div class="mb-3 col-3">
   
    
    <select class="form-select" id="" name="class" >
    <option selected disabled value="">class</option>
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
  
  <div class="col-3">
    
    <input type="text" class="form-control" id=""  name="roll" placeholder="roll">
  </div>

  <div class="mb-3 col-3">

    
    <select class="form-select" id="" name="section">
      
      <option value="A">A</option>
      <option value="B">B</option>
    </select>
  </div>
 
  <button type="" name="search" class="btn btn-unique col-2">search</button>
  </div> 
  
  <?php require 'db_connect.php' ;

if(isset($_POST['search'])){
  
  $class = $_POST['class'];
  $section = $_POST['section'];
  $roll = $_POST['roll'];

  $search1 = "SELECT * FROM students_mark WHERE class='$class'  AND  section ='$section' AND roll = '$roll' ";
  $result = mysqli_query($connect, $search1);

  
  if($result-> num_rows > 0 ){
    while($row = $result->fetch_assoc()){
      
     ?>
<form method="post">

  <div class="form-group mt-4 ">
    <h2>Name: <?php echo $row['name'] ?> </h2>
  </div>
  
  <div class="form-group">
  
    <input type="hidden" class="form-control"  name="id" value="<?php echo $row['id'] ?>" >
  </div>

  <div class="form-group">
  <label for="exampleInputPassword1">Bangla</label>
    <input type="number" class="form-control"  name="bangla" value="<?php echo $row['bangla'] ?>" >
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Bangla 2nd</label>
    <input type="number" class="form-control" name="bangla2" value="<?php echo $row['bangla2'] ?>" >
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">English</label>
    <input type="number" class="form-control" name="english" value="<?php echo $row['english'] ?>" >
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">English 2nd</label>
    <input type="number" class="form-control" name="english2" value="<?php echo $row['english2'] ?>" >
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Mathmatics</label>
    <input type="number" class="form-control" name="math" value="<?php echo $row['math'] ?>" >
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Religion</label>
    <input type="number" class="form-control" name="religion" value="<?php echo $row['religion'] ?>" >
  </div>
  
 
  </div>
  <button type="submit" class="btn btn-unique m-3" name="update">update</button>
  

</form>
    
    
  <?php
  
  }
}else{
  echo 'no data found';
}
}


?>


</div>
    </main>
  </div>
</body>
</html>

<?php
 
 if(isset($_POST['update'])){
  $update = "UPDATE students_mark SET bangla='$_POST[bangla]', bangla2='$_POST[bangla2]', english='$_POST[english]', english2='$_POST[english2]', math='$_POST[math]', religion='$_POST[religion]' WHERE id='$_POST[id]' ";
  $updatequery =mysqli_query($connect, $update);

  if($updatequery){
    echo '<script>alert("update successfully")</script>' ;
  }else{
    echo '<script>alert("update not successfully")</script>' ;
  }
 }
?>