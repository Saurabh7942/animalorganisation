<?php

isset($_POST['submit']) ? $_POST['submit'] : '';

$conn = new mysqli('localhost','root','','test_db');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	echo "connected";
}
$e=$_POST['email'];
$f=$_POST['fullname'];
$u=$_POST['username'];
$p=$_POST['password'];


$email=mysqli_real_escape_string($conn,$_POST['email']);
$fullname=mysqli_real_escape_string($conn,$_POST['fullname']);
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
if(empty($e)){
	echo "<script>alert('forgot to enter email')</script>";
    header('refresh:1;index.php');
	
}
elseif (empty($f)){
	echo "<script>alert('forgot to enter fullname')</script>";
    header('refresh:1;index.php');
	
}
elseif (empty($u)){
	echo "<script>alert('forgot to enter username ')</script>";
    header('refresh:1;index.php');
	
}
elseif (empty($p)){
	echo "<script>alert('forgot to enter password')</script>";
    header('refresh:1;index.php');
	
}
else{
$sql = "INSERT INTO users(email,fullname,username,password)
VALUES ('$email','$fullname','$username',$password);";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//else{
	
	header('refresh:1;home.php');
//}
}
?>