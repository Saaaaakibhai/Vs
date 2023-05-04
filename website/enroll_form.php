<?php

    
	$conn = mysqli_connect('localhost','root', '','dor');
    
    if(isset($_POST['send'])){
		$phome = $_POST['phone'];
		$name = $_POST['name'];
		$email = $_email['email'];
		$address = $_POST['address'];
		$whichcourse = $whichcourse['name'];
		$howmanycourse = $howmanycourse['courses'];

		$sql = "INSERT INTO enroll_form (phone, name, address ,email,whichcourse,howmanycourse) VALUES 
		('$phone', '$name', '$address','$email','$name','$courses')";

        mysqli_query($conn,$sql);
        header('location: enroll.php');
    }
?>
