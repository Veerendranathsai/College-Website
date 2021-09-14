<?php
  include('Server.php');
if (!isset($_SESSION["Authenticated"]))
{
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/logo1.png" type="png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  table.table-hover tr:hover {
    background-color: #fb9692; 
}
.profile{
    margin-left: auto;
    margin-right: auto;
}
</style>
</head>
<body class="profile">
<div class="bg-img img-fluid img-responsive">
    <div class="wrapper bg-dark text-center">
          &nbsp
          &nbsp
            <h3><img src="imgs/logo.png" width="70" height="70">MallaReddy Institute of Technology And Science</h3>
    </div>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-responsive">
            <div class="container">
                <a href=""class="navbar-brand"><img src="imgs/logo1.png" width="30" height="30"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse"id="collapsenavbar">
                        <ul class="navbar-nav ">
                            <li class="nav-item active">
                                <a href="index.php" class="nav-link text-white ">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="gallery.php" class="nav-link text-white">Portfolio</a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown"
                                role="button" data-toggle="dropdown">Pdfs</a>
                                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="pdf1.php">1st year</a>
                                    <a class="dropdown-item" href="pdf2.php">2nd year</a>
                                    <a class="dropdown-item" href="pdf3.php">3rd year</a>
                                </div> 
                           </li>
                            <li class="nav-item">
                                <a href="aboutus.php" class="nav-link text-white">AboutUs</a>
                            </li>
                            <li class="nav-item">
                                <a href="profile.php" class="nav-link text-white">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="logout.php" class="nav-link text-white">Logout</a>
                            </li>
                        </ul>
                     </div>
                </div>
            </nav>
                <main>
                 <div class = "table-responsive">
                        <h1 class="text-danger text-center">User Information</h1>
                  <table class="table table-bordered table-hover text-white">
                <thead class="thead-dark">
                   <tr>
                        <th>Id</th>
                        <th>ProfilePhoto</th>
                        <th>Username</th>
                        <th>Department</th> 
                        <th>Section</th>     
                        <th>RollNo</th>
                        <th>Email</th>
                        <th>MobileNumber</th>
                        <th>State</th>
                        <th>City/Town</th>
                        <th>Hobbies</th>
                        <th>DateofBirth</th>
                        <th>Gender</th>
                        <th colspan="2" class="text-center">Operation</th>
                        
                   </tr>  
               </thead>
                    <?php
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_array($result))
                    {
                    ?>                 
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><img src="<?php echo $row['profilephoto'];?>" width="100" height="100"/></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['department']; ?></td>
                            <td><?php echo $row['section']; ?></td>
                            <td><?php echo $row['rollno']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['mobilenumber']; ?></td>
                            <td><?php echo $row['state']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['hobbies']; ?></td>
                            <td><?php echo $row['dob']; ?></td>
                            <td><?php echo $row['gender']; ?></td> 
                            <td>
                                <a href="update.php?id=<?php echo $row['id'];?>" class="badge badge-success p-2">Edit Profile</a></td>
                               <td> <a href="delete.php?delete=<?php echo $row['id'];?>" class="badge badge-danger p-2" onclick="return confirm
                                ('Do you want to delete this record');">Delete</a>
                            </td>
                        
                        </tr>
                    <?php
                    }
                    ?>  
                      </table>
                  </div>                
                </main>
<footer class="page-footer bg-dark footer-dark">
  <div class="footer-copyright text-center py-3" style="color: white;font-weight:bold;"> Copyright © 2018-2022 CSE-C</div>
</footer>
    </div>
</body>
</html>



                 