<?php 
echo "string";
  $namee=$_POST['name'];

  $emaile=$_POST['email'];

  $uname=$_POST['uname'];
  $passwords=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $gender=$_POST['gender'];
  $date=$_POST['date'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	$conn = new mysqli($servername, $username, $password,$dbname)or die("connection error");
	$sql = "INSERT INTO info (name,uname,password,cpassword,gender,email,date)
	VALUES ('{$namee}','{$uname}','{$passwords}','{$cpassword}','{$gender}','{$emaile}','{$date}')";
	if ($conn->query($sql) === TRUE) {
    header("Location: home.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
    }
	$conn->close();
 ?>