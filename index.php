<html>
<head>
<link rel="stylesheet" type="text/css" href="rng.css">
</head>

<body>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<div class="container">
  <div class="box"></div>
  <div class="container-forms">
    <div class="container-info">
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Have an account?
            </p>
            <div class="btn">
              Log in
            </div>
          </div>
        </div>
      </div>
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Don't have an account? 
            </p>
            <div class="btn">
              Sign up
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-form">
      <div class="form-item log-in">
        <div class="table">
          <div class="table-cell">
			<form action="loginback.php" method="get"><input name="username" placeholder="Username" type="text" /><input name="password" placeholder="Password" type="Password" />
            <div class="btn">
            <button type="submit" name="login">Login</button>
            </div>
          </div></form>
        </div>
      </div>
      <div class="form-item sign-up">
        <div class="table">
          <div class="table-cell">
            <form action="registeration.php" method="POST"><input name="email" placeholder="Email" type="text" /><input name="fullname" placeholder="Full Name" type="text" /><input name="username" placeholder="Username" type="text" /><input name="password" placeholder="Password" type="Password" />
            <div class="btn">
              <button type="submit" name="submit">Signin</button>
            </div>
          </div></form>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
$(".info-item .btn").click(function(){
  $(".container").toggleClass("log-in");
});
$(".container-form .btn").click(function(){
  $(".container").addClass("active");
});
</script>


</body>
</html>