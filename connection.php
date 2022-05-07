<?php
     $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','testing');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} 
	
	else {
			$email = stripcslashes($email);  
			$email = mysqli_real_escape_string($conn, $email);  
		    $sql = "select * from registeration where email = '$email'";  
			$result = mysqli_query($conn, $sql);  
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
			$count = mysqli_num_rows($result);  
			  
		if($count == 1){  
				echo "Someone already registered..!!";
		}
		else{
		$stm = $conn->prepare("insert into registeration(fullname, gender, email, password) values(?, ?, ?, ?)");
		$stm->bind_param("ssss", $fullname, $gender, $email, $password);
		$stm->execute();
	
		echo "Registration successfully...";
        header('location:login.html');
		$stm->close();
		$conn->close();
	}
}?>