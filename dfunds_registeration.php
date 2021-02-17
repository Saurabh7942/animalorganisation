<?php

isset($_GET['submit']) ? $_GET['submit'] : '';

$conn = new mysqli('localhost','root','','test_db');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	echo "connected";
}
$fullname=mysqli_real_escape_string($conn,$_GET['fullname']);
$email=mysqli_real_escape_string($conn,$_GET['email']);
$phoneno=mysqli_real_escape_string($conn,$_GET['phoneno']);
$areano=mysqli_real_escape_string($conn,$_GET['areano']);
$amount=mysqli_real_escape_string($conn,$_GET['amount']);
$sql = "INSERT INTO donation_funds(fullname,email,phoneno,cardno,amount)
VALUES ('$fullname','$email',$phoneno,$areano,$amount);";

if ($conn->multi_query($sql) === TRUE) {
  echo "THANK YOU FOR YOUR DONATION!!!";
  header('refresh:1;aniorg.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//else{
	//echo "unsuccessful";
	//header('refresh:1;home.php');
//}
?>