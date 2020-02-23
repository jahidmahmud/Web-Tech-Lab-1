<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
	<?php
class User
 {
  
  public $name;
  public $email;
  public $gender;
  
   function __construct($name,$email,$gender) 
   {
     
    $this->name = $name;
  
  $this->email = $email;
  
  $this->gender = $gender;
   }
  

  
  function set_name($name) {
    $this->name = $name;
  }
  
  function get_name() 
  {
    return $this->name;
  }
   function set_email($email)
   {
    $this->email = $email;
  }
  function get_email()
  {
    return $this->email;
  }
  function set_gender($gender)
  {
    $this->gender = $gender;
  }
  function get_gender()
  {
    return $this->gender;
  }
}
?>

  <?php
$nameErr = $emailErr = $genderErr ="";
$name = $email = $gender ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr= "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr= "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr= "gender required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <fieldset style="border:2px solid Tomato; color: green">
    <legend style="color: SlateBlue"><h3><b>Personal Info</b></h3></legend>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <b>Name:</b>
  <input type="text" name="name">
  <span style="color: red"><b>*<?php echo $nameErr;?></b></span>
  <br><br>
  <b>Email:</b>
  <input type="email" name="email">
  <span style="color: red"><b>*<?php echo $emailErr;?></b></span>
  <br><br>
  <b>Gender:</b>
  <input type="radio" name="gender" value="male" > Male
  <input type="radio" name="gender" value="female" > Female
  <input type="radio" name="gender" value="other" > Other
  <span style="color: red"><b>*<?php echo $genderErr;?></b></span>
  <br><br>
  <input type="submit" name="submit" value="submit" style="color: blue" style="height:600px;width:600px">
  </fieldset>
</form>

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

$sql = "select * from userinfo";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

?>
<table style="width:100%">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Action</th>
  </tr>
  <?php 
  	while($row = $result->fetch_assoc()) {
   ?>
  <tr>
  	<td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td>
    	<a href='submit.php?id=<?php echo $row['id']; ?>' style="color: red;padding-right: 40px;">Update</a>
    	<a href='delete.php?id=<?php echo $row['id']; ?>' style="color: green;">Delete</a>
    </td>
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
  	if(isset($_POST["submit"])){
	$user = new User($name,$email,$gender);
	$namee=$user->get_name();

	$emaile=$user->get_email();

	$gendere= $user->get_gender();
	if($namee!="" && $emaile!="" && $gendere!=""){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	$conn = new mysqli($servername, $username, $password,$dbname)or die("connection error");
	$sql = "INSERT INTO userinfo (name, email, gender)
	VALUES ('{$namee}', '{$emaile}', '{$gendere}')";
	if ($conn->query($sql) === TRUE) {
    header("Location:http://localhost/myphp/userinfo.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    unset($user);
	$conn->close();
}
}
 ?>
</body>
</html>