<?php include('Server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>RegistrationForm</title>
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
<body class="main">
	<div class="container">
<header class="head">
		 <h2>Registration Form</h2>
</header>
	</div>
	 <div class="container sm">
  <form method="post" action="Register.php" enctype="multipart/form-data"  autocomplete="off">
	  <?php include('Errors.php'); ?>
<div class="form-row">
  	<div class="col form-group">
  	  <label style="font-weight: bold;">Username*</label><br>
		<input type="text" class="form-control" id="fname" name="username" placeholder="Username"  value="<?php echo $username; ?>" required>
	  </div>
	</div>
	<div class="form-row mb-4">
	<div class="col">
  	  <label style="font-weight: bold;">Department*</label>
  	  <select class="browser-default custom-select mb-4" id="dept" name="department"  value="<?php echo $department; ?>" required>
		<option value="">Select Department</option>
        <option value="CSE">CSE</option>
        <option value="ECE">ECE</option>
        <option value="CIVIL">CIVIL</option>
        <option value="IT">IT</option>
	  </select>
	  </div>
	  <div class="col">
  	  <label style="font-weight: bold;">Section*</label>
  	  <select class="browser-default custom-select mb-4" id="sect" name="section"  value="<?php echo $section; ?>" required>
		<option value="">Select Section</option>	
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
	  </select>
	  </div>
	</div>
	<div class="form-row mb-4">
	<div class="col">
  	  <label style="font-weight: bold;">Starting Year*</label>
	  <select class="browser-default custom-select mb-4" id="start" name="startingyear"  value="<?php echo $startingyear; ?>" required>
		<option value="">Select Starting Year</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
		<option value="2018">2018</option>
		<option value="2017">2017</option>
	  </select>
	</div>
	  <div class="col">
  	  <label style="font-weight: bold;">Ending Year*</label>
		<select class="browser-default custom-select mb-4" id="end" name="endingyear"  value="<?php echo $endingyear; ?>" required>
		<option value="">Select Ending Year</option>
        <option value="2024">2024</option>
        <option value="2023">2023</option>
		<option value="2022">2022</option>
		<option value="2021">2021</option>
	  </select>
	  </div>
	</div>
	<div class="form-row mb-4">
	<div class="col">
  	  <label  style="font-weight: bold;">Roll No*</label>
		<input type="text" class="form-control"  name="rollno" placeholder="Roll No"  value="<?php echo $rollno; ?>" required>
		</div>
		<div class="col">
  	  <label style="font-weight: bold;">New Password*</label>
		<input type="password" class="form-control mb-4" name="newpassword" placeholder="Min 8 Characters" required>
		</div>
		<div class="col">
  	  <label  style="font-weight: bold;">confirmpassword*</label>
	  <input type="password" class="form-control mb-4" name="confirmpassword" placeholder="Re-enter New Password" required>
	  </div>
	</div>
	<div class="form-row mb-4">
	<div class="col">
		<label style="font-weight: bold;">Email Id*</label>
		<input type="email" class="form-control mb-4" name="email" placeholder="Email Id"  value="<?php echo $email; ?>" required>
		</div>
		<div class="col">
  	  <label style="font-weight: bold;">Mobile Number*</label>
		<input type="text" class="form-control" name="mobilenumber" placeholder="Mobile Number"  value="<?php echo $mobilenumber; ?>" required>
		</div>
	</div>
	<div class="form-row mb-4">
	<div class="col">
  	  <label style="font-weight: bold;">State*</label>
  	  <select class="browser-default custom-select mb-4" id="state" name="state"  value="<?php echo $state; ?>" required>
		<option value="">Select State</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
		<option value="Arunachal Pradesh">Arunachal Pradesh</option>
		<option value="Assam">Assam</option>
		<option value="Bihar">Bihar</option>
		<option value="Chhattisgarh">Chhattisgarh</option>
		<option value="Goa">Goa</option>
		<option value="Gujarat">Gujarat</option>
		<option value="Haryana">Haryana</option>
		<option value="Himachal Pradesh">Himachal Pradesh</option>
		<option value="Jammu and Kashmir">Jammu and Kashmir</option>
		<option value="Jharkhand">Jharkhand</option>
		<option value="Karnataka">Karnataka</option>
		<option value="Kerala">Kerala</option>
		<option value="Madya Pradesh">Madya Pradesh</option>
		<option value="Maharashtra">Maharashtra</option>
		<option value="Manipur">Manipur</option>
		<option value="Meghalaya">Meghalaya</option>
		<option value="Mizoram">Mizoram</option>
		<option value="Nagaland">Nagaland</option>
		<option value="Orissa">Orissa</option>
		<option value="Punjab">Punjab</option>
		<option value="Rajasthan">Rajasthan</option>
		<option value="Sikkim">Sikkim</option>
		<option value="Tamil Nadu">Tamil Nadu</option>
		<option value="Telangana">Telangana</option>
		<option value="Tripura">Tripura</option>
		<option value="Uttaranchal">Uttaranchal</option>
		<option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="West Bengal">West Bengal</option>
	  </select>
	  </div>
	  <div class="col">
  	  <label style="font-weight: bold;">City/Town*</label>
  	  <input type="text" class="form-control" name="city" placeholder="City/Town"  value="<?php echo $city; ?>" required>
	  </div>
	  <div class="col">
	  <label style="font-weight: bold;">Pincode*</label>
		<input type="text" class="form-control" name="pincode" placeholder="Pincode"  value="<?php echo $pincode; ?>" required>
	  </div>
	</div>
	<div class="form-row mb-4">
	<div class="col">
  	  <label style="font-weight: bold;">Date of Birth*</label>
		<input type="date" class="form-control" id="datepicker" name="dateofbirth"placeholder="dd-mm-yyyy"  value="<?php echo $dateofbirth; ?>" required>
	</div>
		<div class="col">
  	  <label style="font-weight: bold;">Hobbies*</label>
		<input type="text" class="form-control" name="hobbies" placeholder="Hobbies"  value="<?php echo $hobbies; ?>" required>
		</div>
	</div>
		<div class="form-row mb-4">
		<div class="col">
			<label style="font-weight: bold;">Gender*</label>
			<div class="form-check-inline">
  	  <div class="form-check">
      <label for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="gender" value="Male" required>Male
      </label>
	</div>
	<div class="form-check">
      <label for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="gender" value="Female" required>Female
      </label>
	</div>
			</div>
		</div>
	  </div>
	  <div class="form-row mb-4 ">
	  <div class="col">
		  <label style="font-weight: bold;">Profile Photo*</label>
	<input type="file" class="form-control-file" name="profilephoto" value="<?php echo $profilephoto?>" required>
		</div>
		<p style="color: yellow;">(*)Indicates Mandatory Fields</p>
	  </div>
  	<div class="form-row mb-4 text-center">
	  <div class="col">
		<button type="submit" class="btn btn-lg" style="background-color: green; color:white" name="reg_user">Submit</button>
	  </div>
  	</div>
  	<p>
  	<h4 style="color: white;">Already a member? <a href="login.php"><span style="color: red;">Sign in</span></a></h4>
	  </p>
  </form>
	 </div>
</body>
</html>