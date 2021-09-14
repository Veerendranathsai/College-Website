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
	<title>PDF1</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/PI.png" type="png" sizes="16x16">
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
<body class="index">
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
                      <h4 class="bg-success text-white text-center">1st year- 1st sem(1-1)</h4>
                      <h4 style="color: green;">M1(Mathematics-1)<h4>
                       <object data="pdfs/M1 unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/M1 unit-1.pdf">click here to download the <span style="color:red">M1 unit-1</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/M1 unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/M1 unit-2.pdf">click here to download the <span style="color:red">M1 unit-2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/M1 unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/M1 unit-3.pdf">click here to download the <span style="color:red">M1 unit-3</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/M1 unit-4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/M1 unit-4.pdf">click here to download the <span style="color:red">M1 unit-4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/M1 unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/M1 unit-5.pdf">click here to download the <span style="color:red">M1 unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">CHEMISTRY<h4>
                       <object data="pdfs/Chemistry unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Chemistry unit-1.pdf">click here to download the <span style="color:red">Chemistry unit-1</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/Chemistry unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Chemistry unit-2.pdf">click here to download the <span style="color:red">Chemistry unit-2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/Chemistry unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Chemistry unit-3.pdf">click here to download the <span style="color:red">Chemistry unit-3</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/Chemistry unit-4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Chemistry unit-4.pdf">click here to download the <span style="color:red">Chemistry unit-4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/Chemistry unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Chemistry unit-5.pdf">click here to download the <span style="color:red">Chemistry unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">ENGLISH<h4>
                      <h5><span style="color:black">Due to lack of testbook resources we are unable...to provide English material...Sorry for the Inconvenience.</span></h5>
                      <hr>
                      <h4 style="color: green;">BEE(Basic Electrical Engineering)<h4>
                       <object data="pdfs/BEE unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/BEE unit-1.pdf">click here to download the <span style="color:red">BEE unit-1</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/BEE unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/BEE unit-2.pdf">click here to download the <span style="color:red">BEE unit-2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/BEE unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/BEE unit-3.pdf">click here to download the <span style="color:red">BEE unit-3</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/BEE unit-4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/BEE unit-4.pdf">click here to download the <span style="color:red">BEE unit-4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/BEE unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/BEE unit-5.pdf">click here to download the <span style="color:red">BEE unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 class="bg-success text-white text-center">1st year- 2nd sem(1-2)</h4>
                      <h4 style="color: green;">M2(Mathematics-2)<h4>
                       <object data="pdfs/M2 unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/M2 unit-1.pdf">click here to download the <span style="color:red">M2 unit-1</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/M2 Unit-4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/M2 Unit-4.pdf">click here to download the <span style="color:red">M2 unit-4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/M2 unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/M2 unit-5.pdf">click here to download the <span style="color:red">M2 unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">AP(Applied Physics)<h4>
                       <object data="pdfs/Physics unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Physics unit-1.pdf">click here to download the <span style="color:red">Physics unit-1</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/Physics unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Physics unit-2.pdf">click here to download the <span style="color:red">Physics unit-2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/Physics unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Physics unit-3.pdf">click here to download the <span style="color:red">Physics unit-3</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/Physics unit-4(1).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Physics unit-4(1).pdf">click here to download the <span style="color:red">Physics unit-4(1)</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/Physics unit-4(2).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Physics unit-(2).pdf">click here to download the <span style="color:red">Physics unit-4(2)</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/Physics unit-4(3).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Physics unit-4(3).pdf">click here to download the <span style="color:red">Physics unit-4(3)</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/Physics unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Physics unit-5.pdf">click here to download the <span style="color:red">Physics unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">EG(Engineering Graphics)<h4>
                       <object data="pdfs/EG.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/EG.pdf">click here to download the <span style="color:red">EG Complete</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">PPS(Programming for Problem Solving )<h4>
                       <object data="pdfs/PPS unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/PPS unit-1.pdf">click here to download the <span style="color:red">PPS unit-1</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/PPS unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/PPS unit-2.pdf">click here to download the <span style="color:red">PPS unit-2</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/PPS unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/PPS unit-3.pdf">click here to download the <span style="color:red">PPS unit-3</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/PPS unit-4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/PPS unit-4.pdf">click here to download the <span style="color:red">PPS unit-4</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/PPS unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/PPS unit-5.pdf">click here to download the <span style="color:red">PPS unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
</main>  
                    
<footer class="page-footer bg-dark footer-dark">
  <div class="footer-copyright text-center py-3" style="color: white;font-weight:bold;"> Copyright © 2018-2022 CSE-C</div>
</footer>
    </div>
</body>
</html>



                 