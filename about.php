
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
   <title>About Us</title>
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
               </div>
            </div>
         </div>
      </section>
      <section id="contant" class="contant main-heading" style="padding-bottom:0;margin-bottom:-1px;position:relative;z-index:1;">
         <div class="aboutus">
            <div class="col-md-12 col-sm-12">
               <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="full">
                     <h3><b><u> Department of Physical Education</u></b></h3>
                     <p>Department of  Physical Education Established in the year -1966.<br>
                        SDM Sports Club established in the year 1986.<br>&nbsp&nbsp
                        The Department of Physical Education is committed to the promotion of Health oriented and Competition oriented Physical Activity and Sports for the overall development of the student community. Sports play an important role in the development of integrated personality of the youth. Sports and Physical activities are essential part of human resources development. These help to develop health, spirit of friendly competition, achievement, national pride and patriotism.<br>&nbsp&nbsp
                        The management generously promote the principle of “Nurturing of the talent” through incentive like free boarding and lodging, free sports kits, scholarship and free coaching to achieve the objectives, the regular coaching camps were arranged around the year.A number of its alumni have bagged coveted “Karnataka state highest award Ekalavya  over the period of time. Department of Physical education has produced many outstanding Sports personalities who had brought laurels to the nation and the state in International, National and All India Inter University competitions.
                     </p>
                     <h3>Highlights of the Department:</h3>
                     <p>1.To catch the young athlete /player who have the potential to grow in sports and games.<br>
                        2.It provides Well Structured Multi-Sports Training blended with Academic Education.<br>
                        3.ecured Ekalavya awards, International and National medals.<br>
                     </p>  
                  </div>
               </div>
               <div class="col-md-5 col-sm-5 col-xs-12">
                  <img class="img-responsive" src="images/Ground.jpg" alt="#" />
               </div>
            </div>
         </div>
      </section>
      <?php include "footer.php" ?>
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <script src="js/all.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>