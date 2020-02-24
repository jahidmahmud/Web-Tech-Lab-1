<?php
	session_start();

$_SESSION["name"]=$_POST["name"];
$_SESSION["email"]=$_POST["email"];
$_SESSION["gender"]=$_POST["gender"];
echo $_SESSION["name"];
echo $_SESSION["email"];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="2.php" method="post" enctype="multipart/form-data">
		Select:
		<input type="file" name="image" value=""><br>
		<input type="submit" name="Upload" value="Upload">
	</form>
</body>
</html>

