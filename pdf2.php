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
                         <h4 class="bg-success text-white text-center">2nd year- 1st sem(2-1)</h4>
                      <h4 style="color: green;">ADE(Analog and Digital Electronics )<h4>
                       <object data="pdfs/ADE unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/ADE unit-1.pdf">click here to download the <span style="color:red">ADE unit-1</span> PDF file.</a></p>
                       </object>
                         <object data="pdfs/ADE unit-2(1).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/ADE unit-2(1).pdf">click here to download the <span style="color:red">ADE unit-2(1)</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/ADE unit-2(2).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/ADE unit-2(2).pdf">click here to download the <span style="color:red">ADE unit-2(2)</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/ADE unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/ADE unit-3.pdf">click here to download the <span style="color:red">ADE unit-3</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/ADE unit-4(1).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/ADE unit-4(1).pdf">click here to download the <span style="color:red">ADE unit-4(1)</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/ADE unit-4(2).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/ADE unit-4(2).pdf">click here to download the <span style="color:red">ADE unit-4(2)</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/ADE unit-5(1).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/ADE unit-5(1).pdf">click here to download the <span style="color:red">ADE unit-5(1)</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/ADE unit-5(2).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/ADE unit-5(2).pdf">click here to download the <span style="color:red">ADE unit-5(2)</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/ADE unit-5(3).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/ADE unit-5(3).pdf">click here to download the <span style="color:red">ADE unit-5(3)</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/ADE ALL.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/ADE ALL.pdf">click here to download the <span style="color:red">ADE Complete</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">DS(Data Structures)<h4>
                       <object data="pdfs/DS unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DS unit-1.pdf">click here to download the <span style="color:red">DS unit-1</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/DS unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DS unit-2.pdf">click here to download the <span style="color:red">DS unit-2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/DS unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DS unit-3.pdf">click here to download the <span style="color:red">DS unit-3</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/DS unit-4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DS unit-4.pdf">click here to download the <span style="color:red">DS unit-4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/DS unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DS unit-5.pdf">click here to download the <span style="color:red">DS unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">COSM(Computer Oriented Statistical Methods)<h4>
                       <object data="pdfs/COSM unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/COSM unit-1.pdf">click here to download the <span style="color:red">COSM unit-1</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/COSM unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/COSM unit-2.pdf">click here to download the <span style="color:red">COSM unit-2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/COSM unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/COSM unit-3.pdf">click here to download the <span style="color:red">COSM unit-3 & 4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/COSM unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/COSM unit-5.pdf">click here to download the <span style="color:red">COSM unit-5</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/COSM ALL.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/COSM ALL.pdf">click here to download the <span style="color:red">COSM Complete</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">C++(Object Oriented Programming using C++)<h4>
                       <object data="pdfs/C++ unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/C++ unit-1.pdf">click here to download the <span style="color:red">C++ unit-1</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/C++ unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/C++ unit-2.pdf">click here to download the <span style="color:red">C++ unit-2</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/C++ unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/C++ unit-3.pdf">click here to download the <span style="color:red">C++ unit-3</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/C++ unit-4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/C++ unit-4.pdf">click here to download the <span style="color:red">C++ unit-4</span> PDF file.</a></p>
                       </object>
                      <hr>
                       <h4 style="color: green;">COA(Computer Organization and Architecture )<h4>
                      <object data="pdfs/COA unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/COA unit-1.pdf">click here to download the <span style="color:red">COA unit-1</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/COA unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/COA unit-2.pdf">click here to download the <span style="color:red">COA unit-2</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/COA unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/COA unit-3.pdf">click here to download the <span style="color:red">COA unit-3</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/COA unit-4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/COA unit-4.pdf">click here to download the <span style="color:red">COA unit-4</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/COA unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/COA unit-5.pdf">click here to download the <span style="color:red">COA unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 class="bg-success text-white text-center">2nd year- 2nd sem(2-2)</h4>
                      <h4 style="color: green;">DM(Discrete Mathematics)<h4>
                       <object data="pdfs/DM.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DM.pdf">click here to download the <span style="color:red">DM Complete</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">BEFA(Business Economics & Financial Analysis)<h4>
                      <object data="pdfs/BEFA unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/BEFA unit-1.pdf">click here to download the <span style="color:red">BEFA unit-1</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/BEFA unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/BEFA unit-2.pdf">click here to download the <span style="color:red">BEFA unit-2</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/BEFA unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/BEFA unit-3.pdf">click here to download the <span style="color:red">BEFA unit-3</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">OS(Operating Systems)<h4>
                      <object data="pdfs/OS unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/OS unit-1.pdf">click here to download the <span style="color:red">OS unit-1</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/OS unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/OS unit-2.pdf">click here to download the <span style="color:red">OS unit-2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/OS unit-3(2).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/OS unit-3(2).pdf">click here to download the <span style="color:red">OS unit-3(1)</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/OS unit-3(3).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/OS unit-3(3).pdf">click here to download the <span style="color:red">OS unit-3(2)</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/OS unit-4(1).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/OS unit-4(1).pdf">click here to download the <span style="color:red">OS unit-4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/OS unit-5(1).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/OS unit-5(1).pdf">click here to download the <span style="color:red">OS unit-5</span> PDF file.</a></p>
                       </object>
                      
                      <hr>
                      <h4 style="color: green;">JAVA(Java Programming)<h4>
                       <object data="pdfs/Java unit-1.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Java unit-1.pdf">click here to download the <span style="color:red">Java unit-1</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/Java unit-2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Java unit-2.pdf">click here to download the <span style="color:red">Java unit-2</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/Java unit-3.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Java unit-3.pdf">click here to download the <span style="color:red">Java unit-3</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/Java unit-4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Java unit-4.pdf">click here to download the <span style="color:red">Java unit-4</span> PDF file.</a></p>
                       </object>
                       <object data="pdfs/Java unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/Java unit-5.pdf">click here to download the <span style="color:red">Java unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
                      <h4 style="color: green;">DBMS(Database Management Systems)<h4>
                       <object data="pdfs/DBMS unit-1&2.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DBMS unit-1&2.pdf">click here to download the <span style="color:red">DBMS unit-1 & 2</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/DBMS unit-3(1).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DBMS unit-3(1).pdf">click here to download the <span style="color:red">DBMS unit-3(1)</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/DBMS unit-3(2).pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DBMS unit-3(2).pdf">click here to download the <span style="color:red">DBMS unit-3(2)</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/DBMS unit-4.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DBMS unit-4.pdf">click here to download the <span style="color:red">DBMS unit-4</span> PDF file.</a></p>
                       </object>
                        <object data="pdfs/DBMS unit-5.pdf" type="application/pdf" width="600px" height="300px">
                              <p><a href="pdfs/DBMS unit-5.pdf">click here to download the <span style="color:red">DBMS unit-5</span> PDF file.</a></p>
                       </object>
                      <hr>
</main>               
                      
                  
<footer class="page-footer bg-dark footer-dark">
  <div class="footer-copyright text-center py-3" style="color: white;font-weight:bold;"> Copyright © 2018-2022 CSE-C</div>
</footer>
    </div>
</body>
</html>



                 