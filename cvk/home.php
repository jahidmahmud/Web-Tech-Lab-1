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

<h2 style="margin-top: 100px;margin-left: 40px;font-size: 50px"><b> Welcome to xCompany</b></h2>


<div class="footer">
<p> Copyright @ 2017</p>
</div>

</body>
</html>
