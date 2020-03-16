<!DOCTYPE html>
<html>
<head>
<style>
  table, th, td {
  border: 1px solid black;
  background-color: #FFFAFA ;
}
th, td {
  padding: 10px;
}
th{
  background-color: gray;
  color :white;
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
  <li style="float: left;color:white;margin: 10px;border-right: none;"> <h2>Xcompany</h2></li>

  <li><a href="home.php">logout</a></li>
    <li><a href="profile.php"><?php 
    session_start();
    echo $_SESSION["login_user"]?></a></li>
</ul>
<br>
<br>
<div style="margin-left: 20px;font-size: 20px; height: 500px;width: 400px; border-right: 1px solid black;float: left;">
<a  href="welcome.php">Dashboard</a>
<br><br>
<a href='profile.php' >View Profile</a>
<br><br>
<a href="edit.php">Edit Profile</a>
<br><br>
<a href="profilepic.php">Change Profile Image</a>
<br><br>
<a href="pass.php">Change Password</a>
<br><br>
<a href="home.php">Log out</a>
<br><br>
</div>



<div style=" padding:1px 16px;margin-left: 30px; height:500px;width: 600px; float: left;">

<?php
 	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	$conn = new mysqli($servername, $username, $password,$dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$idk=$_GET['id'];

	$sql = "select * from products where id=$idk";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {

 ?>
<form method="post" action="3.php" style="background-color: #F8F8FF">
<fieldset>
	<legend style="font-size: 25px"><b>Update Products</b></legend><br>
  Name:
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
  <br>
   Description:
   <textarea name="message" rows="5" cols="30"> <?php echo $row['description']; ?></textarea>
   <br>
   <br>
   Quantity:
  <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>"><br><br>
   <input type="submit" value="submit">
</fieldset>
</form>

 <?php
	}
}
$conn->close();
 ?>

  
</div>
<div class="footer">
<p> Copyright @ 2017</p>
</div>

</body>
</html>
