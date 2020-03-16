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
	  <li><a href="registation.php" style="border-right: none;">Registation</a></li>

	<li><a href="login.php">Login</a></li>
  <li><a href="home.php">Home</a></li>
</ul>

<form style="margin-top: 50px;margin-left: 40px;width: 40%;background-color: #F5F5F5" action="task.php" method="post">
<fieldset>
  <legend style="font-size: 25px"><b>Login Form</b></legend>
  <img src="l.png" style="height: 80px;width: 100px">
  <br><br>
  <b>Username:</b>
  <input type="text" name="name"><br><br>
  <b>Password:</b>
  <input type="password" name="email"><br>
  <br>
   <input style="margin-left: 80px;font-size: 20px;" type="submit" value="submit">
</fieldset>
</form>

<div class="footer">
<p> Copyright @ 2017</p>
</div>

</body>
</html>
