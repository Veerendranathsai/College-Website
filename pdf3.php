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
	<title>PDF2</title>
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
<body>
<div class="bg-img img-fluid img-responsive">
    <div class="wrapper bg-dark text-center">
          &nbsp
          &nbsp
            <h2><img src="imgs/logo.png" width="70" height="70">MallaReddy Institute of Technology And Science</h2>
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
                                <a href="gallery.php" class="nav-link text-white">Gallery</a>
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
                                <a href="aboutus.php" class="nav-link text-white">About us</a>
                            </li>
                            <li class="nav-item">
                                <a href="profile.php" class="nav-link text-white">Profile</a>
                            </li>
                        </ul>
                     </div>
                </div>
            </nav>    
<main>          
<h4 class="bg-success text-white text-center">3rd year - 1st sem(3-1)</h4>
                      <h4 style="color: green;">FLAT(Formal Languages & Automata Theory)<h4>
                       <object data="pdfs/FLAT unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/FLAT unit-1.pdf">click here to download the <span style="color:red">FLAT unit-1</span> PDF file.</a></p>
                       </object>
                         <object data="pdfs/FLAT unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/FLAT unit-2.pdf">click here to download the <span style="color:red">FLAT unit-2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/FLAT unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/FLAT unit-3.pdf">click here to download the <span style="color:red">FLAT unit-3</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/FLAT unit--4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/FLAT unit--4.pdf">click here to download the <span style="color:red">FLAT unit-4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/FLAT unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/FLAT unit-5.pdf">click here to download the <span style="color:red">FLAT unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">SE(Software Engineering )<h4>
                       <object data="pdfs/SE unit--1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/SE unit--1.pdf">click here to download the <span style="color:red">SE unit-1</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/SE unit--2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/SE unit--2.pdf">click here to download the <span style="color:red">SE unit-2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/SE unit--3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/SE unit--3.pdf">click here to download the <span style="color:red">SE unit-3</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/SE unit--4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/SE unit--4.pdf">click here to download the <span style="color:red">SE unit-4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/SE unit--5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/SE unit--5.pdf">click here to download the <span style="color:red">SE unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">CN(Computer Networks)<h4>
                      <hr>
                      <h4 style="color: green;">WT(Web Technologies )<h4>
                       <object data="pdfs/WT unit--1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/WT unit--1.pdf">click here to download the <span style="color:red">WT unit-1</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/WT unit--2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/WT unit--2.pdf">click here to download the <span style="color:red">WT unit-2</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/WT unit--3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/WT unit--3.pdf">click here to download the <span style="color:red">WT unit-3</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/WT unit--5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/WT unit--5.pdf">click here to download the <span style="color:red">WT unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
                       <h4 style="color: green;">PPL(Principles of Programming Languages )<h4>
                      <object data="pdfs/PPL 5 - UNITS NOTES.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/PPL 5 - UNITS NOTES.pdf">click here to download the <span style="color:red">PPL 5 UNITS NOTES</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">CG(Computer Graphics )<h4>
                       <object data="pdfs/CG unit--1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/CG unit--1.pdf">click here to download the <span style="color:red">CG unit-1</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/CG unit--2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/CG unit--2.pdf">click here to download the <span style="color:red">CG unit-2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/CG unit--3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/CG unit--3.pdf">click here to download the <span style="color:red">CG unit-3</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/CG unit--4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/CG unit--4.pdf">click here to download the <span style="color:red">CG unit-4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/CG unit--5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/CG unit--5.pdf">click here to download the <span style="color:red">CG unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>

                      <h4 class="bg-success text-white text-center">3rd year - 2nd sem(3-2)</h4>

                      <h4 style="color: green;">ML(Machine Learning)<h4>
                       <object data="pdfs/ML unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/ML unit-1.pdf">click here to download the <span style="color:red">ML unit-1</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/ML unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/ML unit-2.pdf">click here to download the <span style="color:red">ML unit-2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/ML unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/ML unit-3.pdf">click here to download the <span style="color:red">ML unit-3</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/ML unit-4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/ML unit-4.pdf">click here to download the <span style="color:red">ML unit-4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/ML unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/ML unit-5.pdf">click here to download the <span style="color:red">ML unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">CD(Compiler Design )<h4>
                       <object data="pdfs/CD unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/CD unit-1.pdf">click here to download the <span style="color:red">CD unit-1</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/CD unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/CD unit-2.pdf">click here to download the <span style="color:red">CD unit-2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/CD unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/CD unit-3.pdf">click here to download the <span style="color:red">CD unit-3</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/CD unit-4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/CD unit-4.pdf">click here to download the <span style="color:red">CD unit-4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/CD unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/CD unit-5.pdf">click here to download the <span style="color:red">CD unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">DAA(Design and Analysis of Algorithms)<h4>
                       <object data="pdfs/DAA unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DAA unit-1.pdf">click here to download the <span style="color:red">DAA unit-1</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/DAA unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DAA unit-2.pdf">click here to download the <span style="color:red">DAA unit-2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/DAA unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DAA unit-3.pdf">click here to download the <span style="color:red">DAA unit-3</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/DAA unit-4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DAA unit-4.pdf">click here to download the <span style="color:red">DAA unit-4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/DAA unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DAA unit-5.pdf">click here to download the <span style="color:red">DAA unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">STM(Software Testing Methodologies)<h4>
                       <object data="pdfs/STM unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/STM unit-1.pdf">click here to download the <span style="color:red">STM unit-1</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/STM unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/STM unit-2.pdf">click here to download the <span style="color:red">STM unit-2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/STM unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/STM unit-3.pdf">click here to download the <span style="color:red">STM unit-3</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/STM unit-4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/STM unit-4.pdf">click here to download the <span style="color:red">STM unit-4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/STM unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/STM unit-5.pdf">click here to download the <span style="color:red">STM unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">BST(Basic Sensors of Technology)<h4>
                       <object data="pdfs/BST unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/BST unit-1.pdf">click here to download the <span style="color:red">BST unit-1</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/BST unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/BST unit-2.pdf">click here to download the <span style="color:red">BST unit-2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/BST unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/BST unit-3.pdf">click here to download the <span style="color:red">BST unit-3</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/BST unit-4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/BST unit-4.pdf">click here to download the <span style="color:red">BST unit-4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/BST unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/BST unit-5.pdf">click here to download the <span style="color:red">BST unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>

</main>               
                      
                  
<footer class="page-footer bg-dark footer-dark">
  <div class="footer-copyright text-center py-3" style="color: white;font-weight:bold;"> Copyright © 2018-2022 CSE-C</div>
</footer>
    </div>
</body>
</html>



                 