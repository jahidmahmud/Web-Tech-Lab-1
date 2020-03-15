<?php
	session_start();
    $id=$_SESSION['idk'];
	$filename=$_FILES["image"]["name"];
	$tempname=$_FILES["image"]["tmp_name"];
	$folder="up/".$filename;
	move_uploaded_file($tempname, $folder);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	$conn = new mysqli($servername, $username, $password,$dbname)or die("connection error");
	$sql = "UPDATE info SET image='$folder' WHERE id=$id";
	if ($conn->query($sql) === TRUE) {
    header("location: welcome.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
    }
	$conn->close();
 ?>