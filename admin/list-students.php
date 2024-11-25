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
      <th scope="col">birth date</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 
      require 'db_connect.php';

     $sql = "SELECT * FROM `students`  ";
     $result =$connect->query($sql);
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