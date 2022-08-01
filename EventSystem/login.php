<?php
	session_start();
	include 'src/config/config.php';

	if(isset($_POST['login'])){
		$email = $_POST['log_email'];
		$password = $_POST['log_pass'];

		$sql = "SELECT * FROM users WHERE email = '$email'";
		$query = $conn->query($sql);

		
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['email'] = $row['id'];
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	
	else{
		$_SESSION['error'] = 'Input user credentials first';
	}

	header('location: index2.php');

?>