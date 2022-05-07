<?php 
require('connection3.php');
session_start();
session_regenerate_id(true);
if(!isset($_SESSION['LoginId'])){
     header("location: supplier.php");
}
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF - 8">
    <meta name="viewport" content = "width = device - width,initial-scale = 1">
    <title>SUPPLIER PAGE</title> 
    <link rel="stylesheet" type = "text/css" href = "styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

<body>
<header>
        <a href = "#" class ="logo"><img src = "logo-img2.jfif" alt ="hello"><h2>Meal Magic</h2></a>
        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <a  href="background.php" class= "fa fa-home">HOME</a>
                <a href="login.html" >LOGIN</a>
                <a href="index3.php"  class= "fa fa-shopping-cart">MENU</a>
                <a href="supplier.php">SUPPLIER_PORTAL</a>
                <a href = "admin_Login.php">ADMIN_PORTAL</a>
                <a href="logout.php">LOGOUT</a>
        </nav>
</header>
    
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <div class = "header">
        <h1>SUPPLIER PANNEL - <?php echo $_SESSION['LoginId']?></h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method ="post">
      
        </form>
    </div>
<div class="container mt-5">
<div class="row">
<div class="col-lg-12">
<table class="table  text-center table-striped">
  <thead>
    <tr>
      <th scope="col"><h2>Order ID</h2></th>
      <th scope="col"><h2>Customer</h2></th>
      <th scope="col"><h2>Phone No</h2></th>
      <th scope="col"><h2>Address</h2></th>
      <th scope="col"><h2>DATE</h2></th>
      <th scope="col"><h2>TIME</h2></th>
      <th scope="col"><h2>Orders</h2></th>
     
    </tr>
  </thead>
  <tbody>
  <?php 
        $query = "SELECT * FROM `order_manager`";
        $user_result = mysqli_query($conn,$query);
        while($user_fetch = mysqli_fetch_assoc($user_result))
        {
            echo"
            <tr>
            <td>$user_fetch[Order_Id]</td>
            <td>$user_fetch[Full_Name]</td>
            <td>$user_fetch[Phone_No]</td>
            <td>$user_fetch[Address]</td>
            <td>  ".date("Y/m/d")."</td>
            <td>".date("H:i:sa")."</td>
            <td>
            <table class='table text-center table-light'>
                <thead>
                <tr>
                <th scope='col'><h4>Item Name</h4></th>
                <th scope='col'><h4>Cost</h4></th>
                <th scope='col'><h4>Quantity</h4></th>
              
                </tr>
                </thead>
               
                <tbody>";
                        $query = "SELECT * FROM `order_orders` WHERE Order_Id = $user_fetch[Order_Id]";
                        $order_result = mysqli_query($conn,$query);
                      while($order_fetch = mysqli_fetch_assoc($order_result))
                      {
                          echo"
                          <tr>
                          <td>$order_fetch[Item_Name]</td>
                          <td>$order_fetch[COST]</td>
                          <td>$order_fetch[Quantity]</td>
                          </tr>";
                      }
                      
                          // Set the new timezone
                         
                echo "</tbody>   </table>
                </td>
                </tr>";
                
            

        }
?>  

  </tbody>
</table>
</div>
</div>
</div>
<?php
if(isset($_POST['Logout'])){
  session_destroy();
  header("location:supplier.php ");
}
?>
<style>
    body{
        margin :0;
    }
    div.header{
        color: black;
        font-family:poppins;
        display:flex;
        flex-direction:row;
        align-items: center;
        justify-content:space-between;
        padding:0 40px;
    }
    div.header button{
        font-size:16px;
        font-weight:550;
        padding:8px 12px;
        border: 2px solid ;
       border-radius:4px;

    }
body{
    background-image:url("food3.jpg");
    height:100%;
    background-position:center;
    background-repeat:no-repeat;
    background-size:cover;
}

</style>
 </body>
 </html>