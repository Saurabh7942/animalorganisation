<?php
    session_start();
    include 'connect.php';
	//echo $_POST['login'];
	#echo "<script>alert('Hello ${_GET['submit']}')</script>";
    if(isset($_GET['login']))
    { 
    //Obtained from the login page i.e index.php using a form
    $name = $_GET['username'];
    $password = $_GET['password'];
	
	//echo "<script>alert('Hello abc')</script>";

    
    //check if the user is student

    $query = "SELECT * from users where username='$name'";
    $res = mysqli_query($conn, $query);
	//$pwd = "SELECT * from users where password='$password'"
	$row=mysqli_fetch_assoc($res);
	//echo $name;
    //if(strcmp($row['username'],$name)==0)
	
	if(mysqli_num_rows($res) > 0)
            {
                
                
                if($password==$row['password'])
                {
                //$_SESSION['username']=$name;
                //$_SESSION['password']=$password;
                header('refresh:1;home.php');
                }
                
                
                else
                {
                    echo "<script>alert('Enter correct password')</script>";
                    header('refresh:1;index.php'); 
                }
			}
          //}

    else
            {
                echo "<script>alert('You are not valid person to Enter')</script>";
                header('refresh:1;index.php');
            }
          
}
?>