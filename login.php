<?php include('Server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>LoginForm</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="main1">
  <header class="head">
  	<h2>Login Form</h2>
  </header>
  <form method="post" action="login.php"  autocomplete="off">
  	<?php include('Errors.php'); ?>
  	<div class="form-row mb-4 ">
  	<div class="col">
  	  <label style="font-weight: bold;">Username</label><br>
		<input type="text" class="form-control" id="uname" name="username" placeholder="Username"  >
	  </div>
  	</div>
  	<div class="form-row mb-4">
  	<div class="col">
  	  <label style="font-weight: bold;">Password</label>
		<input type="password" class="form-control" name="password" placeholder="Password">
		</div>
	  </div>
	  <div class="form-row">
  	<div class="col">
		<button type="submit" class="btn btn-lg" style="background-color: green; color:white" name="login_user">Login</button>
	  </div>
	  <h4><a href="forgot.php"><span style="color: yellow;">Forgot Password?</span></a></h4>
	  </div>
  	<p>
		  <h4 style="color: white;">Not yet a member? <a href="Register.php"><span style="color: red;">Sign up</span></a></h4>
  	</p>
  </form>
</body>
</html>