<!DOCTYPE html>

<?php
require '../home/login-out.php';
$select = new select();

if(isset($_SESSION["email"])){
  $user = $select->Email($_SESSION["email"]);
}else{
  header("location: ../home/login.php");
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="back-styles.css">
    
</head>
<body>
    <header class="">
  <nav class="navbar navbar-expand-lg navbar-light bg-light  p-0 ">
  <div class="container-fluid ">
    <a class="navbar-brand  admin-name bg-dark text-light px-4 border border--bottom-light"> 
      <?php echo $user["type"]; ?> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" >
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
      <form class="d-flex">
      <?php echo $user["firstname"]; ?>
        <a href="logout.php"> <i class="fa-solid ps-2 fa-right-from-bracket"></i> </a>
      </form>
    </div>
  </div>
</nav>
  </header>
</body>
</html>