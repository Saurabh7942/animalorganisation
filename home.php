<?php 
@session_start();


 ?>

<html>
<head>
<title>Login Page</title>

	<link rel="stylesheet" type="text/css" href="home.css">
<body>

	<ul>
		<li><div class="centered6"><h6 id="demo"></h6>
		<script>
		var d = new Date();
		document.getElementById("demo").innerHTML = d;
		</script></div><li>
	</ul>
	<ul>
		<li><h5><a href="logout.php">Logout</a></h5></li>
		<li><h5><a class="active" href="#abt">About</a></h5></li>
		<li><h5><a href="conus.html">Contact</a></h5></li>
		<li><h5><a href="shopsite.html">Shop</a></h5></li>
		<li><h5><a href="home.php">Home</a></h5></li>
	</ul>
	


	<div class="parallax"></div>
		
		<div class="centered"><h1>WELCOME</h1><br>
		<h3><a href="aniorg.html"><button class="btn">Let's Go >>></button></a></h3></div>
	</div>	
	<div class="parallax"></div>
		
		<div class="centered2"><h2>ANIMAL EXTINCTION</h2><br>
		<h3>Click here to get more information</h3><br>
		<a href="aniext.html"><button class="btn2">Learnmore</button></a>
		</div>
		
	</div>	
	<div class="parallax"></div>
		
		<div class="centered3"><h2>CLIMATE CRISES</h2><br>
		<h3>Click here to get more information</h3><br>
		<a href="clicri.html"><button class="btn1">Learn more</button></a>
		</div>
		
	</div>	
	<div class="card">
		
		<div class="centered4"><a name="abt"><h4>About this site</h4></a><br>
		<p><a href="abt.html"><button class="btn3">Learnmore</button></a></p>
		</div>
		
	</div>	

    
</body>
</head>
</html>