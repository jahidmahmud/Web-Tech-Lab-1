<!DOCTYPE html>
<html>
<head>
<style>
  table, th, td {
  border: 1px solid black;
  background-color: #FFFAFA ;
}
th, td {
  padding: 15px;
}
th{
  background-color: #DCDCDC;
  color: black;
}
table{
  width: 50%;
  margin-top: 100px;
  margin-left: 50px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 9px;
  overflow: hidden;
  background-color: gray;
}

li {
  float:right;
  border-right:1px solid #bbb;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 15px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}
.footer {
   position: fixed;
   padding: 15px;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: gray;
   color: white;
   text-align: center;
}
</style>
</head>
<body>

<ul>
	<li style="float: left;color:white;margin: 10px;border-right: none;"><h2>Xcompany</h2></li>
	  <li><a href="registation.php" style="border-right: none;">Registation</a></li>

	<li><a href="login.php">Login</a></li>
  <li><a href="home.php">Home</a></li>
</ul>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from products";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

?>
<table >
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Quantity</th>
  </tr>
  <?php 
    while($row = $result->fetch_assoc()) {
   ?>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
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

<div class="footer">
<p> Copyright @ 2017</p>
</div>

</body>
</html>
