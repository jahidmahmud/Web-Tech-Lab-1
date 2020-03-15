 <?php
  $id=$_POST['id'];
  $namee=$_POST['name'];
  $uname=$_POST['uname'];
  $passwords=$_POST['password'];
  $cpassword=$_POST['cpassword'];

  $gendere=$_POST['gender'];
  $emaile=$_POST['email'];
  $dates=$_POST['date'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mydb";
  $conn = new mysqli($servername, $username, $password,$dbname)or die("connection error");
  $sql = "UPDATE info SET name='$namee',uname='$uname',password='$passwords',cpassword='$cpassword',gender='$gendere',email='$emaile',date='$dates'  WHERE id=$id";

   if ($conn->query($sql) === TRUE) {
    header("location: welcome.php");
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  $conn->close();
 ?>