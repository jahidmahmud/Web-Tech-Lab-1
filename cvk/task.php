<?php 
	$namee=$_POST["name"];

	$emaile=$_POST["email"];
	if($namee!="" && $emaile!=""){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	$conn = new mysqli($servername, $username, $password,$dbname)or die("connection error");
	$myusername = mysqli_real_escape_string($conn,$_POST['name']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['email']); 
      
      $sql = "SELECT id FROM info WHERE uname = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_start();

         $_SESSION['login_user'] = $myusername;
         $_SESSION['idk'] = $row['id'];
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "error";
      }
   }
 ?>