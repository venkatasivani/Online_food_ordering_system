<?php require("connection3.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF - 8">
    <meta name="viewport" content = "width = device - width,initial-scale = 1">
    <title>SUPPLIER PAGE</title> 
    <link rel="stylesheet" type = "text/css" href = "styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type = "text/css" href = "style3.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
        <a href = "#" class ="logo"><img src = "logo-img2.jfif" alt ="hello">
          <h2>Meal Magic</h2></a>
        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
          <a  href="background.php" class= "fa fa-home"  >HOME</a>
                <a href="login.html" >LOGIN</a>
              
                <a href="Cart.php"  class= "fa fa-shopping-cart">MENU</a>
                <a href="supplier.php">SUPPLIER_PORTAL</a>
                
        </nav>
    </header>
<body>
    
    
        <div class ="container">
            <div class ="myforce">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
                  <br>
                  <h2>SUPPLIER LOGIN</h2>
                  <br>
                    <input type="text"  placeholder="Name" name="Name">
                <br><br><br>
                  <input type="password"  placeholder="password" name="password">
                 <br>
                  <br>
                    <button type="submit" name ="Login">LOGIN</button>
                </form>

            </div>
            <div class="image">
                <img src="OIP.jpg">
            </div>
        </div> 
<?php
    function input_filter($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if(isset($_POST['Login'])){
        $Name = input_filter($_POST['Name']);
        $password = input_filter($_POST['password']);
        $Name = mysqli_real_escape_string($conn,$Name);
        $password = mysqli_real_escape_string($conn,$password);
        $query = "SELECT * FROM  `supplier` WHERE `Name`=? AND `password` =?";
        if($stmt = mysqli_prepare($conn,$query)){
            mysqli_stmt_bind_param($stmt,"ss",$Name,$password);
            mysqli_stmt_execute($stmt); //excute prepared statement
            mysqli_stmt_store_result($stmt); //transffering result
            if(mysqli_stmt_num_rows($stmt)){
               session_start();
               $_SESSION['LoginId'] = $Name;
               header("location:supplier_panel.php");
            }
            else{
                echo "<script>alert('Invalid Admin');</script>";
            }
          mysqli_stmt_close($stmt);
        }
        else{
            echo "<script>alert('Invalid name');</script>";
        }
    }
   
?>
</body>
</html>

