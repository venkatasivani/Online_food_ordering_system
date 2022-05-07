<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
  <a href = "#" class ="logo"><h3>Meal Magic     </h3></a><br>
    </button> 

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <br>  <a   href="index3.php" aria-current="page"class="btn btn-outline-success"> MENU CART </a>
        
      </ul>
    <div>
    <?php 
      $count = 0;
      if(isset($_SESSION['Cart'])){
        $count = count($_SESSION['Cart']);
      }
    ?>

        
        <a href="mycart.php" class="btn btn-outline-success">CART(<?php echo $count ;?>)</a>
        <a href ="payment.php"  class="btn btn-outline-success">PAYMENT</a></h2>
        

    </div>
  </div>
</nav>
</body>
</html>