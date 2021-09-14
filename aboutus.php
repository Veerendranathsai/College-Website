<?php 
session_start();
if (!isset($_SESSION["Authenticated"]))
{
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aboutus</title>
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

</head>
<body>
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
                        </ul>
                     </div>
                </div>
            </nav>
<main>
                       <div class="about" style="padding: 10px 25px 10px 25px;">
           <p> <span style="color: green;font-size:30px">This website</span> is intensionally created to make things easier.We have our best memories in this website.
We have many of the memories too.You can recall all of them...how strange it was...when we entered cse-c.How rapid things change..what changes we undergo..
Its just like we started yesterday..
This journey is not restricted for 4 years..its something beyond years..beyond college...!!!
 We dont open our books till last moments and its really hectic to make things sorted at the peak seconds.The purpose of this website is to get collection of all material at a go along with some of our memories recall. You can get all the material regarding all your subjects from our website.Currently it includes materials of 
first and second year.We collected nearly 18 subjects with 80 units. As per our R-18 syllabus we sorted all the material gathered.</p>
<p>We hope it may help some of the people for their examinations.It will surely help to our section people.You can easily prepare for regular and supplementary as well. 
Starting from M1 we have all the material required for our section. The only thing is that you have to login and make use of our website.We are fully secured and your information is not available
to any one unless admin.We dont share your personal information to third parties.We can assure you at most privacy.You have many flexibilities even with ur information.You must follow some rules in making your
profile but you can update it whenever required.You can upload your photograph as per your interest.
We choose materials only from faculty pdfs of our college. Most of them are hand written and easy to study. We updated our material with many options.You can download the pdf and print it.
We faced many difficulties at the time of exams for organising material.Our website make even easy to take print out all of a sudden.The biggest task is sorting rather than study,So we are 
here infront of you..by this small initiative.We will be happy if you are benificial by our website....     
                                                                                  <span style="color: red; font-size:30px">Thank you...!!</span> </p>


            </div>   
            
                
        
</main>
<footer class="page-footer bg-dark footer-dark">
  <div class="footer-copyright text-center py-3" style="color: white;font-weight:bold;"> Copyright © 2018-2022 CSE-C</div>
</footer>
    </div>
</body>
</html>



                 