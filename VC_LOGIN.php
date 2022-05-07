<?php      
    include('connection3.php');  
    session_start();
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from registeration where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);      
        if($count == 1){  
        
           $_SESSION['login_user'] = $email;
           $_SESSION['success'] = "You have logged in";
           echo "<h3>LOGIN SUCCESSFUL..</h3>";
           header("location: index3.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
        echo "<a href = index.html> Back to Registeration Form </a>";
?>