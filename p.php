
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<?php
	session_start();
$myfile = fopen("you.txt", "w") or die("Unable to open file!");
$txt = $_SESSION["name"];
fwrite($myfile, $txt."\n");
$txt = $_SESSION["email"];
fwrite($myfile, $txt."\n");
$txt = $_SESSION["uname"] ;
fwrite($myfile, $txt."\n");
$txt = $_SESSION["password"];
fwrite($myfile, $txt."\n");
$txt =$_SESSION["cpassword"];
fwrite($myfile, $txt."\n");
$txt = $_SESSION["gender"] ;
fwrite($myfile, $txt."\n");
$txt = $_SESSION["date"];
fwrite($myfile, $txt."\n");
$txt = $_POST["blood"];
fwrite($myfile, $txt."\n");
echo "<h1>file written successfully</h1>";
fclose($myfile);
?>

<?php
session_destroy();
?>

</body>
</html>