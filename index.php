
<?php 
define('DIR','');
require_once DIR .'config.php';
$contol = new Controller();
$admin = new Admin();
?>
<!DOCTYPE html>
<html lang="en">
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <title>SportsArena</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/colors.css">
   <link rel="stylesheet" href="css/versions.css">
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="stylesheet" href="css/custom.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
   </head>
   <body class="game_info" data-spy="scroll" data-target=".header">
      <section id="top">
         <?php include "header.php" ?> 
         <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
               <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner" role="listbox">
                  <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
                     <img src="images/clg.jpg">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <b><p style="font-size: 35px">SRI DHARMASTHALA<br><br>MANJUNATHESHWARA COLLEGE <br><br>(AUTONOMOUS)<br><br>UJIRE</p></b>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item skyblue" data-ride="carousel" data-interval="5000">
                     <img src="images/clg2.jpg">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <b><p style="font-size: 35px;">SRI DHARMASTHALA<br><br>MANJUNATHESHWARA COLLEGE <br><br>(AUTONOMOUS)<br><br>UJIRE</p></b>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item darkerskyblue" data-ride="carousel" data-interval="5000">
                     <img src="images/clg3.jpg">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight">
                              <b><p style="font-size: 35px">SRI DHARMASTHALA<br><br>MANJUNATHESHWARA COLLEGE <br><br>(AUTONOMOUS)<br><br>UJIRE</p></b>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>&nbsp&nbsp
      <div class="col-md-12 col-sm-12">
         <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="full">
               <h3><b>About College</b></h3>
               <p>SDM College, Ujire is an autonomous college under Mangalore University. Founded in 1966, the college offers Bachelors and Masters Programmes in a serene campus at the foothills of the Western Ghats in Karnataka (India). The college is a recognized centre for research programmes of Mangalore University, Tumkur University and Kannada University, Hampi. Managed by SDM Educational Society, it is headed by the visionary, Dr. D. Veerendra Heggade, Dharmadhikari of Shri Kshetra Dharmasthala.</p>
               <h3><b>SDME Society</b></h3>
               <p>Sri Dharmasthala Manjunatheshwara Educational [SDME] Society, Ujire® was established with the primary objective of making education accessible and affordable to the rural youth. With the hallmarked vision: Putting Value into Education, at present, it manages 56 educational institutions from Kindergarten to Doctoral Studies in the state of Karnataka in India. These institutions offer quality education in the fields of General, Law, Technical, Medical and Management Studies. These institutions ensure quality through updated skill sets and value based education.</p>
            </div>
         </div>
         <div class="col-md-5 col-sm-5 col-xs-12">
            <img class="img-responsive" src="images/clg4.jpg" alt="#" />
         </div>
      </div>
      <div  style="padding-top:150px">
         <h1>SDM SPORTS VIDEOS</h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
         <iframe width="450" height="400" src="https://www.youtube.com/embed/MhlaAHcPh4U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp&nbsp
         <iframe width="450" height="400" src="https://www.youtube.com/embed/sf6hSUsd4Wo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>&nbsp&nbsp
         <iframe width="450" height="400" src="https://www.youtube.com/embed/FeTpozMUDhU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
      </div>  
   </div>
   <?php include "footer.php" ?>
   <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
   <script src="js/all.js"></script>
   <script src="js/custom.js"></script>
   </body>
</html>