<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	$conn = new mysqli('localhost','root','','test1');
	if($conn->connect_error){
		die('Connection failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(firstname,lastname,email,password,number)values(?,?,?,?,?)");
		$stmt->bind_param("ssssi",$firstname, $lastname, $email, $password, $number);
		$stmt->execute();
		echo "registraion successfully...";
		$stmt->close();
		$conn->close();
	}
?>