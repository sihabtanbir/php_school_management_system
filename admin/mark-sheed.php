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

  <style>
    @media print{

  body *{
      visibility: hidden;
  }

  .print-content, .print-content *{
      visibility: visible;
  }
  .print-content{
    position: absolute;
    top:0;
    left:0;
  }
}
  </style>
</head>
<body>
  <!-- header  -->
  <?php  include 'header.php'; ?>


  <div class="main-content d-flex">
    <!-- aside  -->
     <?php  include 'aside.php'; ?>
    <main class="w-100">
      
        <button onclick="window.print();" class="btn btn-unique m-2 "> <i class="fa-solid fa-print"></i> </button>
      
        <div class="search container  m-3">


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

   
    <div class="print-content">
    <h2 class="text-center">Unique Model School</h2>
      <?php if(isset($_POST['search6'])){
        $class = $_POST['class'];  ?>
      <p class="text-center">Class <?php echo $class; ?> Mark Sheet Final 24</p>
      <?php } ?>

    <table class=" table table-striped text-center">
      
      <thead>
        <tr class="bg-dark text-light ">
          <th scope="col">Name</th>
          <th scope="col">Roll</th>
          <th scope="col">Section</th>
          <th scope="col">Bangla</th>
          <th scope="col">Bangla 2nd</th>
          <th scope="col">English</th>
          <th scope="col">English 2nd </th>
          <th scope="col">Math</th>
          <th scope="col">Religion</th>
          <th scope="col">Total Number</th>
        
        </tr>
      </thead>
      <tbody class="text-center">
      <tr class="text-center">
        <?php 
           require 'db_connect.php';

           if(isset($_POST['search6'])){
             $class = $_POST['class'];
             
             $search2 =" SELECT * FROM `students_mark` WHERE class = '$class' ";
             $result = mysqli_query($connect, $search2);
             if($result-> num_rows > 0 ){
               while($row = $result->fetch_assoc()){
                $sum= $row['bangla'] + $row['bangla2'] + $row['english'] + $row['english2'] +  $row['math'] + $row['religion'];
                $intsum = (float)$sum;
            echo "<tr>
              <td> $row[name] </td>
              <td> $row[roll] </td>
              <td> $row[section] </td>
                <td> $row[bangla] </td>
                <td> $row[bangla2] </td>
                <td> $row[english] </td>
                <td> $row[english2] </td>
                <td> $row[math] </td>
                <td> $row[religion] </td>
                <td> $intsum </td>
                
                </tr>
             ";
          }
        }
        else{
            echo 'no data found';
          }
        }
        
        ?>
        </tr>
          
        <?php
  
      



        ?>
        
      </tbody>

    </table>
    </div>
    
    


      


</div>
    </main>
  </div>
</body>
</html>

