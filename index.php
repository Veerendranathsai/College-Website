<?php 
session_start();
if (!isset($_SESSION["Authenticated"]))
{
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Life</title>
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
                <a href=""class="navbar-brand font-weight-bold"><img src="imgs/logo1.png" width="30" height="30"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse"id="collapsenavbar">
                        <ul class="navbar-nav">
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
    <main class="alter">
            <marquee behavior="scroll",direction="left" style="color: red; font-size: 50px; font-weight:bold">Welcome to CSE-C</marquee>
 <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="container">
      <img class="img-fluid img-potrait" src="imgs/cse25.jpg" width="800" height="500">
    </div>
    </div>
    <div class="carousel-item">
    <div class="container">
      <img class="img-fluid img-potrait" src="imgs/cse26.jpg" width="800" height="500">
      </div>   
    </div>
    <div class="carousel-item">
    <div class="container">
      <img class="img-fluid img-potrait" src="imgs/cse27.jpg" width="800" height="500">
      </div>      
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
 </div>
&nbsp
 &nbsp
 &nbsp
 <div class="part" style="padding: 10px 25px 10px 25px;text-align:justify;">
           <h3 style="color:blue;text-shadow: 2px 2px 2px white;">CSE-C</h3>
           <p>
          <span style="font-size:30px;">We</span> the students of cse-c from <span style="color:purple;font-size:20px">MallaReddy Institute of Technology and sciences</span> are feeling delight to share ourselves to the world.We have no words to describe us.Every one has their own talent some in games,some in academics,some in coding,other curricular activities and so on.In a word our section can be defined as a garden.Every one with their own characters.Some may be roses,some may be hibiscus,some are even throns too..!!.We are never compared..!!We may be divided by benches but we are united by canteen.</p><p>We ourselves mark a benchmark in our campus.
We had wonderful memories even from the first day of our college life.Divided by batches but we are united by an emotion called section.Our parents and siblings love us because of the blood relation but the friend is the only person who comes into our life as a stranger then acquire the place which is superior than blood relation.</p>
         <p> We also entered our section with knowledge of null now we had became a family of 59 people.Days pass...semisters run..faculty changes..we remain the same..!! It is something more than friendship less than a family.One day study,last date assignments,corner seat fights,last one week record submissions we had a bunch of varied emotions.We may be fighting in class but we stand ourselves when it came regarding our section.
We may be classified by first benchers,middle benchers,last benchers but always one emotion we the CSE-C.</p>
                 <p> Finally we are here to express ourselves,share ourselves,conquer ourselves.</p>
 </div>
</div>
</main>
 <div>
         <center>
         <a  style="color:blue;" href="https://www.facebook.com/profile.php?id=100005067826040" target="_blank"><img src="imgs/FB.png" width="70" height="70"></a>&nbsp
        <a style="color:blue;" href="https://instagram.com/veerendra_90?igshid=jv80bvlmgytc" target="_blank"><img src="imgs/IS.jpg" width="50" height="50"></a>
        <p>Developed by veerendra.</p>
         </center>
        
</div>
<footer class="page-footer bg-dark footer-dark">
  <div class="footer-copyright text-center py-3" style="color: white;font-weight:bold;"> Copyright © 2018-2022 CSE-C</div>
</footer>
</body>
</html>