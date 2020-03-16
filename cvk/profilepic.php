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



<div style="margin-left: 30px; padding:1px 16px;height:500px;width: 600px; float: left;">

  <form action="pic.php" method="post" enctype="multipart/form-data" style="background-color: #F8F8FF;">
    <fieldset>
      <legend><h2><b>Profile Picture</b></h2></legend>
      <br>
      <img src="2.jpg" style="height: 80px;width: 80px">
      <br>
    <input type="file" name="image" value=""><br>
    <hr>
    <input type="submit" name="Upload" value="Upload">
    </fieldset>
  </form>
  
</div>
<div class="footer">
<p> Copyright @ 2017</p>
</div>

</body>
</html>
