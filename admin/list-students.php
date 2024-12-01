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
    <main class="w-75 mx-auto">
      <div class="container m-4 text-center ">
      <form action="" method="post" class="d-flex" autocomplete="yes">
            <select name="class" id="" class="form-select mr-2 w-100">
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
            <button type="submit" name="search6" class="btn btn-unique">Search</button>
          </form>

        <h2 class="text-center m-auto p-2">Students List </h2>

        <div class="admin-table">
        <table class="table table-striped ">
  <thead>
    <tr class="bg-dark text-light">
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Section</th>
      <th scope="col">Kind</th>
      <th scope="col">Roll</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Image</th>
      <th scope="col">Birth</th>
      <th scope="col">birth Number</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 
      
     
           require 'db_connect.php';

           if(isset($_POST['search6'])){
             $class = $_POST['class'];
             
             $search2 =" SELECT * FROM `students` WHERE class = '$class' ";
             $result = mysqli_query($connect, $search2);
             if($result-> num_rows > 0 ){
               while($row = $result->fetch_assoc()){
     
        echo "<tr>
          <td> $row[name] </td>
           <td> $row[class] </td>
            <td> $row[section] </td>
             <td> $row[kind] </td>
             <td> $row[roll] </td>
             <td> $row[email] </td>
             <td> $row[phone] </td>
            <td> $row[image] </td>
             <td> $row[birth] </td>
            
             <td> $row[birth_number] </td>
              <td> <a>edit</a> </td>
               <td> <a>delete</a> </td>
        </tr> ";
      }
     } 
     else{
      echo 'no data found';
    }
    }
    
     ?>
      
    </tr>
  </tbody>
</table>
        </div>
      </div>
    
    </main>
  </div>
</body>
</html>