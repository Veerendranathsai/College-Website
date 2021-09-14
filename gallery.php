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
	<title>Gallery</title>
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
            <marquee behavior="scroll", direction="left" style="color:red; font-size: 40px;"><strong>Here are some of our Memories... </strong></marquee>
                    <div>
                      <div class="row text-center text-lg-left">
                          <div class="col-lg-3 col-md-4 col-xs-6">
                              <a href="imgs/cse12.jpg"><img class="img img-fluid img-potrait" src="imgs/cse12.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                              <a href="imgs/cse11.jpg"><img class="img img-fluid img-potrait" src="imgs/cse11.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                              <a href="imgs/cse13.jpg"><img class="img img-fluid img-potrait" src="imgs/cse13.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                              <a href="imgs/cse7.jpg"><img class="img img-fluid img-potrait" src="imgs/cse7.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                              <a href="imgs/cse8.jpg"><img class="img img-fluid img-potrait" src="imgs/cse8.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                              <a href="imgs/cse9.jpg"><img class="img img-fluid img-potrait" src="imgs/cse9.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                            <a href="imgs/cse17.jpg"><img class="img img-fluid img-potrait" src="imgs/cse17.jpg" width="400" height="400"></a>
                          </div> 
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse3.jpg"><img class="img img-fluid img-potrait" src="imgs/cse3.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse4.jpg"><img class="img img-fluid img-potrait" src="imgs/cse4.jpg"width="400" height="400"></a>
                          </div> 
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse18.jpg"><img class="img img-fluid img-potrait" src="imgs/cse18.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse19.jpg"><img class="img img-fluid img-potrait" src="imgs/cse19.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse22.jpg"><img class="img img-fluid img-potrait" src="imgs/cse22.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse39.jpg"><img class="img img-fluid img-potrait" src="imgs/cse39.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse42.jpg"><img class="img img-fluid img-potrait" src="imgs/cse42.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse43.jpg"><img class="img img-fluid img-potrait" src="imgs/cse43.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse32.jpg"><img class="img img-fluid img-potrait" src="imgs/cse32.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse33.jpg"><img class="img img-fluid img-potrait" src="imgs/cse33.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse34.jpg"><img class="img img-fluid img-potrait" src="imgs/cse34.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse35.jpg"><img class="img img-fluid img-potrait" src="imgs/cse35.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse36.jpg"><img class="img img-fluid img-potrait" src="imgs/cse36.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse37.jpg"><img class="img img-fluid img-potrait" src="imgs/cse37.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse1.jpg"><img class="img img-fluid img-potrait" src="imgs/cse1.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse5.jpg"><img class="img img-fluid img-potrait" src="imgs/cse5.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse0.jpeg"><img class="img img-fluid img-potrait" src="imgs/cse0.jpeg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse20.jpg"><img class="img img-fluid img-potrait" src="imgs/cse20.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/Cse46.jpg"><img class="img img-fluid img-potrait" src="imgs/Cse46.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse41.jpg"><img class="img img-fluid img-potrait" src="imgs/cse41.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse26.jpg"><img class="img img-fluid img-potrait" src="imgs/cse26.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse27.jpg"><img class="img img-fluid img-potrait" src="imgs/cse27.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse31.jpg"><img class="img img-fluid img-potrait" src="imgs/cse31.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse29.jpg"><img class="img img-fluid img-potrait" src="imgs/cse29.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse25.jpg"><img class="img img-fluid img-potrait" src="imgs/cse25.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse2.jpg"><img class="img img-fluid img-potrait" src="imgs/cse2.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse6.jpg"><img class="img img-fluid img-potrait" src="imgs/cse6.jpg" width="400" height="400"></a>
                          </div> 
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse15.jpg"><img class="img img-fluid img-potrait" src="imgs/cse15.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse10.jpg"><img class="img img-fluid img-potrait" src="imgs/cse10.jpg" width="400" height="400"></a>
                          </div>
                            <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse52.jpg"><img class="img img-fluid img-potrait" src="imgs/cse52.jpg" width="400" height="400"></a>
                          </div>
                           <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse55.jpg"><img class="img img-fluid img-potrait" src="imgs/cse55.jpg" width="400" height="400"></a>
                          </div>
                           <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse45.jpg"><img class="img img-fluid img-potrait" src="imgs/cse45.jpg" width="400" height="400"></a>
                          </div>
                           <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse49.jpg"><img class="img img-fluid img-potrait" src="imgs/cse49.jpg" width="400" height="400"></a>
                          </div>
                           <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse23.jpg"><img class="img img-fluid img-potrait" src="imgs/cse23.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse24.jpg"><img class="img img-fluid img-potrait" src="imgs/cse24.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse28.jpg"><img class="img img-fluid img-potrait" src="imgs/cse28.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse47.jpg"><img class="img img-fluid img-potrait" src="imgs/cse47.jpg" width="400" height="400"></a>
                          </div>
                           <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse21.jpg"><img class="img img-fluid img-potrait" src="imgs/cse21.jpg" width="400" height="400"></a>
                          </div>
                            <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse54.jpg"><img class="img img-fluid img-potrait" src="imgs/cse54.jpg" width="400" height="400"></a>
                          </div>
                           <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse53.jpg"><img class="img img-fluid img-potrait" src="imgs/cse53.jpg" width="400" height="400"></a>
                          </div>
                            <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse51.jpg"><img class="img img-fluid img-potrait" src="imgs/cse51.jpg" width="400" height="400"></a>
                          </div>
                            <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse50.jpg"><img class="img img-fluid img-potrait" src="imgs/cse50.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse48.jpg"><img class="img img-fluid img-potrait" src="imgs/cse48.jpg" width="400" height="400"></a>
                          </div>
                           <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse55.jpg"><img class="img img-fluid img-potrait" src="imgs/cse55.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse57.jpg"><img class="img img-fluid img-potrait" src="imgs/cse57.jpg" width="400" height="400"></a>
                          </div> 
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse14.jpg"><img class="img img-fluid img-potrait" src="imgs/cse14.jpg" width="400" height="400"></a>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse30.jpg"><img class="img img-fluid img-potrait" src="imgs/cse30.jpg" width="400" height="400"></a>
                          </div> 
                           <div class="col-lg-3 col-md-4 col-xs-6">
                          <a href="imgs/cse56.jpg"><img class="img img-fluid img-potrait" src="imgs/cse56.jpg" width="400" height="400"></a>
                          </div>

                        
                  </div>
</main>                
<footer class="page-footer bg-dark footer-dark">
  <div class="footer-copyright text-center py-3" style="color: white;font-weight:bold;"> Copyright © 2018-2022 CSE-C</div>
</footer>
    </div>
</body>
</html>



                 