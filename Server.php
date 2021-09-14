<?php
session_start();

// initializing variables
$username = "";
$department = "";
$section = "";
$startingyear = "";
$endingyear = "";
$rollno = "";
$newpassword = "";
$confirmpassword = "";
$email = "";
$mobilenumber = "";
$state = "";
$city = "";
$pincode = "";
$dateofbirth = "";
$hobbies = "";
$gender = "";
$profilephoto = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'mydatabase');
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  if(!preg_match("/^[A-Za-z\s][A-Za-z0-9\s]{5,30}$/",$username))
  {
    array_push($errors,"Please enter valid Username");
  }
  $department = mysqli_real_escape_string($db, $_POST['department']);
  $section = mysqli_real_escape_string($db, $_POST['section']);
  $startingyear = mysqli_real_escape_string($db, $_POST['startingyear']);
  $endingyear = mysqli_real_escape_string($db, $_POST['endingyear']);
  $rollno = mysqli_real_escape_string($db, $_POST['rollno']);
  if(!preg_match("/^\d{2}[A-Z]\d{2}[A-Z]\d{2}[A-Z]\d{1}$/",$rollno))
  {
    array_push($errors,"Please enter valid ROLLNO");
  }
  $newpassword = mysqli_real_escape_string($db, $_POST['newpassword']);
  if(!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\W])(?=\S*[\d])\S*$/",$newpassword))
  {
    array_push($errors,"Please enter Strong Password(Atleast one Uppercase,Lowercase,Specialcharacter & Number)");
  }
  $confirmpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  if(!preg_match("/^([a-z 0-9\.-]+)@([a-z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})?$/",$email))
  {
    array_push($errors,"Please enter valid Email");
  }
  $mobilenumber = mysqli_real_escape_string($db, $_POST['mobilenumber']);
  if(!preg_match("/^[6-9][0-9]{9}$/",$mobilenumber))
  {
    array_push($errors,"Please enter valid MobileNumber");
  }

  $state = mysqli_real_escape_string($db, $_POST['state']); 
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $pincode = mysqli_real_escape_string($db, $_POST['pincode']);
  if(!preg_match("/^[1-9][0-9]{5}$/",$pincode))
  {
    array_push($errors,"Please enter valid Pincode");
  }
  $dateofbirth = mysqli_real_escape_string($db, $_POST['dateofbirth']);
  $hobbies = mysqli_real_escape_string($db, $_POST['hobbies']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $profilephoto = mysqli_real_escape_string($db, 'upload/'.$_FILES['profilephoto']['name']);
  if(!preg_match("/([^\s]+(\.(?i)(jpe?g|png|gif|bmp))$)/",$profilephoto))
  {
    array_push($errors,"Please choose only (jpg,png,jpeg and gif)");
  }
 
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error into $errors array
  if(empty($_POST['department']==""))
  if(empty($_POST['section']==""))
  if(empty($_POST['startingyear']==""))
  if(empty($_POST['endingyear']==""))
  if(empty($_POST['state']==""))
  if(empty($_POST['gender']==""))
  if(empty($_FILES['profilephoto']['name']==""))
  if ($newpassword != $confirmpassword) {	array_push($errors, "Passwords are not Matched");}

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
 
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {  
    $password = MD5($newpassword);//encrypt the password before saving in the database
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
    $emailquery = "SELECT * FROM users WHERE  email = '$email'";
    $sql = mysqli_query($db,$emailquery);
    if(mysqli_num_rows($sql)>0)
    {
      array_push($errors,"Email already exist");
    }
    else
    {
  	$query = "INSERT INTO users (username, department, section, startingyear, endingyear, rollno, password, email, mobilenumber, state, city, pincode, dob, hobbies, gender, profilephoto) 
  			  VALUES('$username', '$department', '$section', '$startingyear', '$endingyear', '$rollno', '$password', '$email', '$mobilenumber', '$state', '$city', '$pincode', '$dateofbirth', '$hobbies', '$gender', '$profilephoto')";
    mysqli_query($db, $query);

   array_push($errors,"Registered Successfully");
   
    }
  }
} 
if (isset($_POST['login_user']))
{
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username))
  {
  	array_push($errors, "Please Enter Username");
  }
  if (empty($password))
  {
  	array_push($errors, "Please Enter Password");
  }

  if (count($errors) == 0)
  {
  	$password = MD5($password);
  	$query = "SELECT * FROM users WHERE username ='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1)
    {
      $_SESSION["Authenticated"] = true;
      header('location: index.php');
    }
    else
    {
  		array_push($errors, "Invalid username/password");
  	}
  }
}
?>