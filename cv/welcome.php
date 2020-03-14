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

  <li><a href="">logout</a></li>
    <li><a href=""><?php 
    session_start();
    echo $_SESSION["login_user"]?></a></li>
</ul>
<br>
<br>
<a style="margin-left: 20px;font-size: 20px" href="welcome.php">Dashboard</a>
<br><br>
<a href='profile.php' style="margin-left: 20px;font-size: 20px">View Profile</a>
<br><br>
<a style="margin-left: 20px;font-size: 20px" href="edit.php">Edit Profile</a>
<br><br>
<a style="margin-left: 20px;font-size: 20px" href="">Change Profile Image</a>
<br><br>
<a style="margin-left: 20px;font-size: 20px" href="pass.php">Change Password</a>
<br><br>
<a style="margin-left: 20px;font-size: 20px" href="home.php">Log out</a>
<br><br>

<div style="margin-left:30%;padding:1px 16px;height:1000px;">

  <h2><b> Welcome <?php 
    echo $_SESSION['login_user'];
    ?> </b></h2>
  
</div>



<div class="footer">
<p> Copyright @ 2017</p>
</div>

</body>
</html>
