<?php
	


	 $conn = enrollform('localhost', 'root', '', 'enrollbd');
	 if(!$conn){
	    die("Connection failed: " . mysqli_connect_error());
	 }
	
?>
<?php
	session_start();

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
<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
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
			$_SESSION['success'] = 'Info updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: enroll.php');

?>
<?php
	session_start();


	if(isset($_GET['phone'])){
		$sql = "DELETE FROM info WHERE phone = '".$_GET['phone']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: enroll.php');
?>