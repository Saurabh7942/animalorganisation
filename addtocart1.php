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

$sql = "INSERT INTO shop(shirts,cost)
VALUES ('shirt1',250);";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

	
	header('refresh:1;shopsite.html');



?>