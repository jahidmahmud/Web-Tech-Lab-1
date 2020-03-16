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

<form style="margin-top: 50px; margin-left: 40px;width: 60% ;background-color:#F5F5F5" action="rtask.php" method="post">
<fieldset>
  <legend style="font-size: 25px"><b>Registation</b></legend>
  <br>
  <b>Name:</b>
  <input type="text" name="name"><br>
  <hr>
  <b>Email:</b>
  <input type="text" name="email"><br>
  <hr>
  <b>User Name:</b>
  <input type="text" name="uname"><br>
  <hr>
  <b>Password:</b>
  <input type="Password" name="password"><br>
  <hr>
  <b>Confirm Password:</b>
  <input type="Password" name="cpassword"><br>
  <hr>
  <fieldset>
  <legend><b>Gender</b></legend>
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="others">Others
  <br>
  </fieldset>
  <hr>
  <fieldset>
    <legend><b>Date of Birth</b></legend>
  <input type="Date" name="date">(dd/mm/yyyy)
  <br>
  </fieldset>
  <hr>
   <input style="margin-left: 80px;font-size: 20px;" type="submit" value="submit">
</fieldset>
</form>

<div class="footer">
<p> Copyright @ 2017</p>
</div>

</body>
</html>
