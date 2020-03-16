<!DOCTYPE html>
<html>
<head>
<style>
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

  <li><a href="table.php">logout</a></li>
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
<a href="add.php">Add Product</a>
<br><br>
<a href="table.php">Log out</a>
<br><br>
</div>



<div style=" margin-left: 30px;padding:1px 16px;height:500px;width: 600px; float: left;">
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydb";
  $conn = new mysqli($servername, $username, $password,$dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $idk=$_SESSION['idk'];

  $sql = "select * from info where id=$idk";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

 ?>

<form action="update.php" method="post" style="background-color: #F8F8FF">
<fieldset>
  <legend style="font-size: 25px"><b>Edit Profile</b></legend>
  <br>
  <b>Name:</b>
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
  <hr>
  <b>Email:</b>
  <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
  <hr>
  <b>User Name:</b>
  <input type="text" name="uname" value="<?php echo $row['uname']; ?>"><br>
  <hr>
  <b>Password:</b>
  <input type="text" name="password" value="<?php echo $row['password']; ?>"><br>
  <hr>
  <b>Confirm Password:</b>
  <input type="text" name="cpassword" value="<?php echo $row['cpassword']; ?>"><br>
  <hr>
  <fieldset>
  <legend><b>Gender</b></legend>
  <input type="radio" name="gender" value="male" <?php if($row['gender']=="male") echo "checked";?>
  value="male">Male
  <input type="radio" name="gender" value="female" <?php if ($row['gender']=="female") echo "checked";?>
  value="female">Female
  <input type="radio" name="gender" value="others" <?php if ($row['gender']=="others") echo "checked";?>
  value="others">Others
  <br>
  </fieldset>
  <hr>
  <fieldset>
    <legend><b>Date of Birth</b></legend>
  <input type="Date" name="date" value="<?php echo $row['date']; ?>">(dd/mm/yyyy)
  <br>
  </fieldset>
  <hr>
   <input style="margin-left: 80px;font-size: 20px;" type="submit" value="submit">
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
