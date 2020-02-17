
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	session_start();
$_SESSION["name"] = $_POST["name"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["uname"] = $_POST["uname"];
$_SESSION["password"] = $_POST["password"];
$_SESSION["cpassword"] = $_POST["cpassword"];
$_SESSION["gender"] = $_POST["gender"];
$_SESSION["date"] = $_POST["date"];
?>
	<form action="p.php" method="post">
Blood:
<select name="blood">
	<option value="a+">A+</option>
	<option value="b+">B+</option>
	<option value="o+">O+</option>
	<option value="a-">A-</option>
	<option value="ab+">AB+</option>
	<option value="o-">O-</option>
</select>
<br>
<input type="submit" name="submit">
</form>
</body>
</html>