<?php
 	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	$conn = new mysqli($servername, $username, $password,$dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	else{
	echo "Connected successfully";
	}
	$idk=$_GET['id'];

	$sql = "select * from userinfo where id={$idk}";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {

 ?>
<fieldset style="border:2px solid Tomato; color: green">
    <legend style="color: SlateBlue"><h3><b>Personal Info</b></h3></legend>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <b>Name:</b>
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <input type="text" name="name" value="<?php echo $row['name']; ?>">
  <br><br>
  <b>Email:</b>
  <input type="email" name="email" value="<?php echo $row['email']; ?>">
  <br><br>
  <b>Gender:</b> 
  <input type="radio" name="gender" value="male" 
  <?php if ($row['gender']=="male") echo "checked";?>
  value="male"
  > Male
  <input type="radio" name="gender" value="female" 
  <?php if ($row['gender']=="female") echo "checked";?>
  value="female"
  > Female
  <input type="radio" name="gender" value="other" 
  <?php if ($row['gender']=="other") echo "checked";?>
  value="other" 
  > Other
  <br><br>
  <input type="submit" name="submit" value="submit" style="color: blue" style="height:600px;width:600px">
  </fieldset>
</form>

 <?php
	}
}
$conn->close();
 ?>
 <?php
 if(isset($_POST["submit"])){
  $id=$_POST['id'];
  $namee=$_POST['name'];

  $emaile=$_POST['email'];

  $gendere=$_POST['gender'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydb";
  $conn = new mysqli($servername, $username, $password,$dbname)or die("connection error");
  $sql = "UPDATE userinfo SET name='$namee',email='$emaile',gender='$gendere' WHERE 
  id=$id";
  if ($conn->query($sql) === TRUE) {
    header("Location:http://localhost/myphp/userinfo.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  $conn->close();
}
 ?>