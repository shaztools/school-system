<?php
include '..connection.php';

//variable to store our users input
$username = $email =$password =$encrypted_pass = ''; 
$usernameErr =$emailErr =$passwordErr = '';


//srssion variables
$_SESSION['userRegistered'] = "Registration successful";
$_SESSION['notRegistered'] = "Registration not successful";
$_SESSION['classTypeSuccess'] = "success";
$_SESSION['classTypeErroe'] = "Danger";



//capture user input
if (isset($_post['save']) {
	#code
	if (empty($_post['username'])) {

		# code...
		$usernameErr = "username is required";
	} elseif  {
		$username = $_post['username'];
		# code...
	}

	if (empty($_post['email'])) {
		# code...
		$emailErr = 'email is equired';
	} else {
		$email = $_post['email'];
	}

	if (empty($_post['password'])) {
		# code...
		$passwordErr = 'password is equired';
	} else {
		$password = $_post['password'];
		//encyrpting my password
		$encrypted_pass = md5($password);
	}
	if (empty($usernameErr) && empty($emailErr) &&empty($passwordErr)) {
		# code...
		//prepare the statement
		$stmt = $conn->prepare("INSERT INTO users (username,email,password) VALUES (?,?,?)");
		$stmt->bind_param("sss",$username,$email,$password);
		
		if ($stmt->execute() === TRUE) {

		}
			# code...
		}
	}


?>