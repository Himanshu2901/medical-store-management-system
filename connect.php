<?php
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Number=$_POST['Number'];



$conn = new mysqli('localhost','root','','mydatabase3');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);

    } else {
		$stmt = $conn->prepare("insert into information(Name,Number, Email,Password) values( ?,?, ?, ?)");
		$stmt->bind_param("siss", $Name, $Number, $Email, $Password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>