<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "testing";  
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        echo "Cannot connect";
        exit(); 
    }  
    else{
        echo "";
    }
?>  