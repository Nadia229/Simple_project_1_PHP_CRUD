<?php

$mobile = $_POST['mobile'];
$email = $_POST['email'];

$con = mysqli_connect('localhost', 'root', '', 'userdata');


if($con->connect_error){
	die("Failed to connect :".$con->connect_error);
}else{
	$stmt = $con->prepare("select * from userinfodata where email = ?");
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	if($stmt_result->num_rows > 0){

		$data = $stmt_result->fetch_assoc();
		if($data['mobile'] === $mobile){

				header('location:index.php');
		}
		else{

			echo '<h2>Welcome to Geeks for Geeks</h2>';
			header('location:login.php');
		}

	}else{

        echo '<h2>Welcome to Geeks for Geeks</h2>';
        header('location:login.php');
		
	}
}


?>