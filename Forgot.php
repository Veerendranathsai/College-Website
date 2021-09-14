<?php 
include('Server.php');


if(isset($_POST['forgot']))
{
	$email = mysqli_real_escape_string($db, $_POST['email']);
  if(!preg_match("/^([a-z 0-9\.-]+)@([a-z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})?$/",$email))
  {
    array_push($errors,"Please enter valid Email");
  }
  $oldpassword = mysqli_real_escape_string($db, $_POST['oldpassword']);
  $newpassword = mysqli_real_escape_string($db, $_POST['newpassword']);
  if(!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\W])(?=\S*[\d])\S*$/",$newpassword))
  {
    array_push($errors,"Please enter Strong Password(Atleast one Uppercase,Lowercase,Specialcharacter & Number)");
  }
  $confirmpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);

  if($newpassword==$confirmpassword)
  {
	  $password = MD5($newpassword);
	  $query = "UPDATE users SET password='$password' WHERE email='$email'";
	  mysqli_query($db,$query);
	  array_push($errors,"Password changed successfully");
  }
  else
  {
	array_push($errors,"Passwords are not matched");
  }

}

?>
<!DOCTYPE html>
<html>
<head>
  <title>ChangePassword</title>
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
  	<h2>Change Password</h2>
  </header>
  <form method="post" action="" onsubmit="return valid()"; autocomplete="off">
  	<?php include('Errors.php'); ?>
  	<div class="form-row mb-4 ">
  	<div class="col">
  	  <label style="font-weight: bold;">Email Id</label><br>
		<input type="text" class="form-control" id="uname" name="email" placeholder="Email Id"required>
	  </div>
	  </div>
	  <div class="form-row mb-4">
  	<div class="col">
  	  <label style="font-weight: bold;">Old Password</label>
		<input type="password" class="form-control" name="oldpassword" placeholder="Old Password"required>
		</div>
      </div>
      <div class="form-row mb-4">
  	<div class="col">
  	  <label style="font-weight: bold;">New Password</label>
		<input type="password" class="form-control" name="newpassword" placeholder="New Password"required>
		</div>
      </div>
      <div class="form-row mb-4">
  	<div class="col">
  	  <label style="font-weight: bold;">Confirm Password</label>
		<input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password"required>
		</div>
  	</div>
  	<div class="col text-center">
		<button type="submit" class="btn btn-lg" style="background-color: green; color:white" name="forgot">Submit</button>
	  </div>
	  <p>
		  <h4 style="color: white;">If you changed password? <a href="login.php"><span style="color: red; text-align:center;">Login</span></a></h4>
  	</p>
  </form>
</body>
</html>