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
$sql = "DELETE FROM userinfo WHERE id=$idk";
if ($conn->query($sql) === TRUE) {
    header("Location:http://localhost/myphp/userinfo.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>