<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydb";
  $conn = new mysqli($servername, $username, $password,$dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  session_start();
  $idk=$_SESSION['idk'];

  $sql = "select * from info where id=$idk";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

 ?>

	<form action="change.php" method="post">
<fieldset>
	
	<legend>Change Password
	</legend>
		<br>
	Old Password:
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	<input type="text" name="password" value="<?php echo $row['password']; ?>">
	<br>
	<br>

	New Password:
	<input type="text" name="npassword">
<br><br>
 <input style="margin-left: 80px;font-size: 20px;" type="submit" value="submit">


</fieldset>
</form>
<?php
  }
}
$conn->close();
 ?>
</body>
</html>