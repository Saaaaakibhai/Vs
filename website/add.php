<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$email = $_email['email'];
		$whichcourse = $whichcourse['whichcourse'];
		$howmanycourse = $howmanycourse['howmanycourse'];
		$sql = "INSERT INTO enroll_form (firstname, lastname, address ,email,whichcourse,howmanycourse) VALUES 
		('$firstname', '$lastname', '$address','$email','$whichcourse','$howmanycourse')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Info added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: enroll.php');
?>