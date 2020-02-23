<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
table, th, td {
  border: 1px solid black;
}
th, td {
  padding: 15px;
}
</style>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
		Select:
		<input type="file" name="image" value=""><br>
		<input type="submit" name="Upload" value="Upload">
	</form>

</body>
</html>
<?php
//$filename=$_FILES["image"]["name"];
//$tempname=$_FILES["image"]["tmp_name"];
//$folder="think/".$filename;
//move_uploaded_file($tempname, $folder)
?>
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

$sql = "select * from image";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

?>
<table style="width:100%">
  <tr>
    <th>Id</th>
    <th>Image</th>
  </tr>
  <?php 
  	while($row = $result->fetch_assoc()) {
   ?>
  <tr>
  	<td><?php echo $row['id']; ?></td>
    <td><img src="<?php echo $row['img']; ?>" height="180" width="180"></td>
  </tr>
  <?php } ?>
</table>
<?php } 
else{
	echo "no data found";
}
?>
<?php 
	$conn->close();
 ?>
<?php
if(isset($_POST["Upload"])){
	$filename=$_FILES["image"]["name"];
	$tempname=$_FILES["image"]["tmp_name"];
	$folder="up/".$filename;
	move_uploaded_file($tempname, $folder);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	$conn = new mysqli($servername, $username, $password,$dbname)or die("connection error");
	$sql = "INSERT INTO image (img) VALUES ('$folder')";
	if ($conn->query($sql) === TRUE) {
    header("Location:http://localhost/myphp/image.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
    }
	$conn->close();

}
 ?>