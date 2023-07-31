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
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Achievements</title>
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
   <style>
  .title{
  border:none;
  border-radius: 1.5rem;
  padding:1%;
  width:20%;
  font-weight: bold;
  font-size: 20px;
  cursor:pointer;
  background: white;
  color: black;
  }
  .b{
    margin-left:1100px;
  }
.card {
  
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: white;
  
  border-radius: 1.5rem;
}
.title {
  color: grey;
  font-size: 18px;
}
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
a {
  text-decoration: none;
  font-size: 14px;
  color: black;
}
button:hover, a:hover {
  opacity: 0.7;
}
.dropbtn {
  width:210%;
  background: grey;
  color: white;
  font-weight: bold;
  padding: 1%;
  font-size: 15px;
  border: none;
  cursor: pointer;
  border-radius: 1px;
}
.dropdown {
  margin-left: 1000px;
  margin-top: -350px;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
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
    <section id="contant" class="contant">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-sm-12 col-xs-12">
            <div class="news-post-holder">
              <u><h1 style="text-align:center">Achievements</h1></u>
                <div class="dropdown">
                  <button class="dropbtn" style="margin-top: 300px;border-radius: 1px;">Tournament Level</button>
                  <div class="dropdown-content">
                    <a href="level.php?id=College Level">College Level</a>
                    <a href="level.php?id=College Level">Taluk Level</a>
                    <a href="level.php?id=College Level">District Level</a>
                    <a href="level.php?id=College Level">State Level</a>
                    <a href="level.php?id=College Level">National Level</a>
                  </div>
                </div>
              <?php
              $table='event';
              $stmt=$admin->ret("SELECT * FROM `event` WHERE `level`='National Level'");
              while($row=$stmt->fetch(PDO::FETCH_ASSOC))
              if ($row['achievement']=='Participated') {}else{
              if(isset($row['trophy'])){?>
              <div class="col-lg-4 col-sm-2 col-xs-12">
                <div class="card">
                  <br><img src="management/controller/<?php echo $row['trophy'];?>" height="220px" width="200px"><br><br>
                  <div>
                    <h2><?php echo $row['tournament_name'];?></h2>
                    <h2><?php echo $row['level'];?></h2>
                    <h3><?php echo $row['achievement'];?></h3>
                    <h4><?php echo $row['ev_date'];?></h4>
                  </div>
                </div>
              </div>
              <?php } ?>
              <?php } ?>
            </div>
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