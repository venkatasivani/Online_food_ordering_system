<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF - 8">
    <meta name="viewport" content = "width = device - width,initial-scale = 1">
    <title>Online Food Order</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type = "text/css" href = "styles.css?v=<?php echo time(); ?>">

</head>
<body>
<header>
        <a href = "#" class ="logo"><img src = "logo-img2.jfif" alt ="hello"><h2>Meal Magic</h2></a>
        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <a  href="background.php" class= "fa fa-home"  >HOME</a>
                <a href="background.php">MENU</a>
                <a href="login.html" >LOGIN</a>
                <a href="index3.php"  class= "fa fa-shopping-cart">MENU</a>
                <a href="supplier.php">SUPPLIER_PORTAL</a>
                <a href = "admin_Login.php">ADMIN_PORTAL</a>
                <a href="logout.php">LOGOUT</a>
        </nav>
    </header>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
require 'connection3.php';
include 'C:\xampp\htdocs\Test1\session.php';
echo "<center><h2><p align = 'center'><font color = green size ='6pt'>Thank You ..!!" .$user_fullname."</font></p></h2></center>";
$user = $user_check;
$subject = "Thank you!!";
$body = "Hi, $user_fullname Your order is confirmed now";
$headers = "From: mealmagicteam@gmail.com";
if (mail($user_check, $subject, $body, $headers)){
    echo "<center><h2><p align = 'center'><font color = green size ='6pt'>Order Confirmation Email has sent to you..." .$user_fullname."</font></p></h2></center>";
   
}else{ 
    echo "<center><h2><p align ='center'> <font color = green size ='6pt'>Order Confirmation Email failed to sent..." .$user_fullname."</font></p></h2></center>";
                                                                                                                                                                                                                                         
}



//https://myaccount.google.com/u/3/security?pli=1&nlr=1
?>
<br>
<style>
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
