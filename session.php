<?php

 include('connection3.php');
 session_start();

 $user_check = $_SESSION['login_user'];
 
 $ses_sql = mysqli_query($conn,"select * from registeration where email = '$user_check' ");

 $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
 $user_fullname= $row['fullname'];
 $login_session = $row['email'];

if(!isset($_SESSION['login_user'])){
     header("location:logout.php");
     die();
}

?>
