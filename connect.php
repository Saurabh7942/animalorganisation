<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "test_db";
  
try {
   
    $conn = mysqli_connect($host, $user, $pass, $db);
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
?>