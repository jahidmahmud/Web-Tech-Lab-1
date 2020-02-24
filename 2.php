<?php
	session_start();

	$filename=$_FILES["image"]["name"];
	$tempname=$_FILES["image"]["tmp_name"];
	$folder="up/".$filename;
	move_uploaded_file($tempname, $folder);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb1";
	$conn = new mysqli($servername, $username, $password,$dbname)or die("connection error");
	var_dump($_SESSION);
	
	$name=$_SESSION["name"];

	$email=$_SESSION["email"];

	$gender=$_SESSION["gender"];

	$password= "1234" ;

	$sql = "INSERT INTO image (name,email,gender,password,image) VALUES ('$name','$email','$gender','$password','$folder')";
	if ($conn->query($sql) === TRUE) {
    echo "uploaded ";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
    }
	$conn->close();
	//session_unset();

// destroy the session
//session_destroy();
 ?>

