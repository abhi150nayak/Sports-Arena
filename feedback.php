
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
   <title>Feedback</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
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
      <section id="contant" class="contant main-heading team">
         <div class="row">
            <div class="container">
               <div class="contact">
                  <div class="col-md-6" style="margin-left: 300px">
                     <div class="contact-us">
                        <form method="post" class="comments-form" id="" action="controller/feedbackfile.php">
                           <ul>
                              <h1 style="margin-right: 25px">FEEDBACK</h1>
                              <li><input type="text" id="" name="name" class="required" placeholder="Enter Name *"></li>
                              <li><input type="email" id="" name="email" class="required email" placeholder="Enter Email *"></li>
                              <li><input type="text" name="phone" id="" placeholder="Enter Phone No.:"></li>
                              <li><textarea name="message" id="" placeholder="Add your message"></textarea></li>
                              <li><input class="thbg-color" type="submit" value="SEND" name="submit" style="background-color: skyblue"></li>
                           </ul>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include "footer.php"?>
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <script src="js/all.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>