<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$courses = $_POST['courses'];
	$number = $_POST['number'];	

	// Database connection
	$conn = new mysqli('localhost','root','','testtwo');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO registration(firstName, lastName, gender, email, message, courses, number) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssi", $firstName, $lastName, $gender, $email, $message, $courses, $number);
		$execval = $stmt->execute();
		echo $execval;
		if ($execval === false) {
            echo "Error: " . $stmt->error;
        } else {
            echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
	}
?>