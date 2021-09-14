<?php
ob_start();
include('Server.php');

if(isset($_GET['id']))
  $id=$_GET['id'];
  $sql = "SELECT * FROM users WHERE id='$id'";
  $result = mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($result))
{
  $id = $row['id'];
  $username = $row['username'];
  $department = $row['department'];
  $section = $row['section'];
  $rollno = $row['rollno'];
  $email = $row['email'];
  $mobilenumber = $row['mobilenumber'];
  $state = $row['state'];
  $city = $row['city'];
  $dateofbirth = $row['dob'];
  $hobbies = $row['hobbies'];
  $gender = $row['gender'];
  $profilephoto = $row['profilephoto'];  
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>UpdateForm</title>
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
		 <h2>Update Form</h2>
</header>
	</div>
	 <div class="container sm">
  <form method="POST" action="update.php"enctype="multipart/form-data"  autocomplete="off">
  <?php include('errors.php'); ?>
     <input type="hidden" name="id" value="<?php echo $id; ?>">
     <div class="form-row">
  	<div class="col form-group">
  	  <label style="font-weight: bold;">Username</label><br>
		<input type="text" class="form-control" id="fname" name="username" placeholder="Username"  value="<?php echo $username; ?>" required>
	  </div>
	</div>
	<div class="form-row mb-4">
	<div class="col">
  	  <label style="font-weight: bold;">Department</label>
  	  <select class="browser-default custom-select mb-4" id="dept" name="department" required>
		<option value="">Select Department</option>
        <option value="CSE"<?php if($department=="CSE"){ echo "selected";}?>>CSE</option>
        <option value="ECE"<?php if($department=="ECE"){ echo "selected";}?>>ECE</option>
        <option value="CIVIL"<?php if($department=="CIVIL"){ echo "selected";}?>>CIVIL</option>
        <option value="IT"<?php if($department=="IT"){ echo "selected";}?>>IT</option>
	  </select>
	  </div>
	  <div class="col">
  	  <label style="font-weight: bold;">Section</label>
  	  <select class="browser-default custom-select mb-4" id="sect" name="section" required>
		<option value="">Select Section</option>	
        <option value="A"<?php if($section=="A"){ echo "selected";}?>>A</option>
        <option value="B"<?php if($section=="B"){ echo "selected";}?>>B</option>
        <option value="C"<?php if($section=="C"){ echo "selected";}?>>C</option>
	  </select>
	  </div>
	</div>
	<div class="form-row mb-4">
	<div class="col">
  	  <label  style="font-weight: bold;">Roll No*</label>
		<input type="text" class="form-control"  name="rollno" placeholder="Roll No"  value="<?php echo $rollno; ?>" required>
		</div>
	</div>
	<div class="form-row mb-4">
	<div class="col">
		<label style="font-weight: bold;">Email Id</label>
		<input type="email" class="form-control mb-4" name="email" placeholder="Email Id"  value="<?php echo $email; ?>" required>
		</div>
		<div class="col">
  	  <label style="font-weight: bold;">Mobile Number</label>
		<input type="text" class="form-control" name="mobilenumber" placeholder="Mobile Number"  value="<?php echo $mobilenumber; ?>" required>
		</div>
	</div>
	<div class="form-row mb-4">
	<div class="col">
  	  <label style="font-weight: bold;">State*</label>
  	  <select class="browser-default custom-select mb-4" id="state" name="state" required>
		<option value="">Select State</option>
        <option value="Andhra Pradesh"<?php if($state=="Andhra Pradesh"){ echo "selected";}?>>Andhra Pradesh</option>
		<option value="Arunachal Pradesh"<?php if($state=="Arunachal Pradesh"){ echo "selected";}?>>Arunachal Pradesh</option>
		<option value="Assam"<?php if($state=="Assam"){ echo "selected";}?>>Assam</option>
		<option value="Bihar"<?php if($state=="Bihar"){ echo "selected";}?>>Bihar</option>
		<option value="Chattisgarh"<?php if($state=="Chattisgarh"){ echo "selected";}?>>Chattisgarh</option>
		<option value="Goa"<?php if($state=="Goa"){ echo "selected";}?>>Goa</option>
		<option value="Gujarat"<?php if($state=="Gujarat"){ echo "selected";}?>>Gujarat</option>
		<option value="Haryana"<?php if($state=="Haryana"){ echo "selected";}?>>Haryana</option>
		<option value="Himachal Pradesh"<?php if($state=="Himachal Pradesh"){ echo "selected";}?>>Himachal Pradesh</option>
		<option value="Jammu and Kashmir"<?php if($state=="Jammu and Kashmir"){ echo "selected";}?>>Jammu and Kashmir</option>
		<option value="Jharkhand"<?php if($state=="Jharkhand"){ echo "selected";}?>>Jharkhand</option>
		<option value="Karnataka"<?php if($state=="Karnataka"){ echo "selected";}?>>Karnataka</option>
		<option value="Kerala"<?php if($state=="Kerala"){ echo "selected";}?>>Kerala</option>
		<option value="Madya Pradesh"<?php if($state=="Madya Pradesh"){ echo "selected";}?>>Madya Pradesh</option>
		<option value="Maharashtra"<?php if($state=="Maharashtra"){ echo "selected";}?>>Maharashtra</option>
		<option value="Manipur"<?php if($state=="Manipur"){ echo "selected";}?>>Manipur</option>
		<option value="Meghalaya"<?php if($state=="Meghalaya"){ echo "selected";}?>>Meghalaya</option>
		<option value="Mizoram"<?php if($state=="Mizoram"){ echo "selected";}?>>Mizoram</option>
		<option value="Nagaland"<?php if($state=="Nagaland"){ echo "selected";}?>>Nagaland</option>
		<option value="Orissa"<?php if($state=="Orissa"){ echo "selected";}?>>Orissa</option>
		<option value="Punjab"<?php if($state=="Punjab"){ echo "selected";}?>>Punjab</option>
		<option value="Rajasthan"<?php if($state=="Rajasthan"){ echo "selected";}?>>Rajasthan</option>
		<option value="Sikkim"<?php if($state=="Sikkim"){ echo "selected";}?>>Sikkim</option>
		<option value="Tamil Nadu"<?php if($state=="Tamil Nadu"){ echo "selected";}?>>Tamil Nadu</option>
		<option value="Telangana"<?php if($state=="Telangana"){ echo "selected";}?>>Telangana</option>
		<option value="Tripura"<?php if($state=="Tripura"){ echo "selected";}?>>Tripura</option>
		<option value="Uttaranchal"<?php if($state=="Uttaranchal"){ echo "selected";}?>>Uttaranchal</option>
		<option value="Uttar Pradesh"<?php if($state=="Uttar Pradesh"){ echo "selected";}?>>Uttar Pradesh</option>
        <option value="West Bengal"<?php if($state=="West Bengal"){ echo "selected";}?>>West Bengal</option>
	  </select>
	  </div>
	<div class="col">
  	  <label style="font-weight: bold;">City/Town</label>
		<input type="text" class="form-control" name="city" placeholder="City/Town"  value="<?php echo $city; ?>" required>
		</div>
	</div>
	<div class="form-row mb-4">
	<div class="col">
  	  <label style="font-weight: bold;">Date of Birth</label>
		<input type="date" class="form-control" id="datepicker" name="dateofbirth"placeholder="dd-mm-yyyy"  value="<?php echo $dateofbirth; ?>" required>
	</div>
		<div class="col">
  	  <label style="font-weight: bold;">Hobbies</label>
		<input type="text" class="form-control" name="hobbies" placeholder="Hobbies"  value="<?php echo $hobbies; ?>" required>
		</div>
	</div>
	<div class="form-row mb-4">
		<div class="col">
			<label style="font-weight: bold;">Gender</label>
			<div class="form-check-inline">
  	  <div class="form-check">
      <label for="radio1">
		<input type="radio" class="form-check-input" id="radio1" name="gender" value="Male" required
		<?php
		 if($gender=="Male")
		 {
			 echo 'checked';
		 }
		
		?>>Male
      </label>
	</div>
	<div class="form-check">
      <label for="radio2">
		<input type="radio" class="form-check-input" id="radio2" name="gender" value="Female" required
		<?php
		 if($gender=="Female")
		 {
			 echo 'checked';
		 }
		
		?>>Female
      </label>
	</div>
			</div>
		</div>
	  </div>
	  <div class="form-row mb-4 ">
	  <div class="col">
		  <label style="font-weight: bold;">Profile Photo*</label>
	<input type="file" class="form-control-file" name="profilephoto" required>
		</div>
	  </div>
  	<div class="form-row mb-4 text-center">
	  <div class="col">
		<button type="submit" class="btn btn-lg" style="background-color: green; color:white" name="update">Update</button>
		<a href="profile.php" class="btn btn-lg" style="background-color: red; color:white" name="cancel">Cancel</a>
	  </div>
  	</div>
  </form>
  <?php
  if(isset($_POST['update']))
{
	$id =mysqli_real_escape_string( $db,$_POST['id']); 
	$username =mysqli_real_escape_string( $db,$_POST['username']);
	$department = mysqli_real_escape_string($db,$_POST['department']);
	$section = mysqli_real_escape_string($db,$_POST['section']);
	$rollno = mysqli_real_escape_string($db,$_POST['rollno']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$mobilenumber = mysqli_real_escape_string($db,$_POST['mobilenumber']); 
	if(!preg_match("/^[6-9][0-9]{9}$/",$mobilenumber))
	{
	  array_push($errors,"Please enter valid MobileNumber");
	}
  
	$state = mysqli_real_escape_string($db,$_POST['state']);
    $city = mysqli_real_escape_string($db,$_POST['city']);
    $dateofbirth = mysqli_real_escape_string($db,$_POST['dateofbirth']);
    $hobbies = mysqli_real_escape_string($db,$_POST['hobbies']);
	$gender = mysqli_real_escape_string($db, $_POST['gender']);
	$profilephoto = mysqli_real_escape_string($db, 'upload/'.$_FILES['profilephoto']['name']);
	
	if(preg_match("!image!",$_FILES['profilephoto']['type'])) 
    {
          if(copy($_FILES['profilephoto']['tmp_name'], $profilephoto))
          {
            $_SESSION['profilephoto'] = $profilephoto;
          }
    }
    else
    {
      $_SESSION['message'] ="Please upload only jpg, png, jpeg, or GIF image!";
    }
    
    $query = "UPDATE users SET username='$username', department='$department', section='$section', rollno='$rollno', email='$email',mobilenumber='$mobilenumber', state='$state',
	city='$city', dob='$dateofbirth', hobbies='$hobbies', gender='$gender', profilephoto='$profilephoto' WHERE id=$id";  
  
    mysqli_query($db,$query);
     
	header('location:profile.php');
}
?>

	 </div>
</body>
</html>
