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
   <title>Players</title>
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
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 90%;
  background-color: #4321;
  border: 1px solid grey;
  border-radius: 1.5rem;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container {
  padding: 2px 16px;
}
.title{
  border:none;
  border-radius: 1.5rem;
  padding:1%;
  width:20%;
  font-weight: bold;
  font-size: 20px;
  cursor:pointer;
  background: grey;
  color: white;
}
.b{
    margin-left:1000px;
  }
  .dropbtn {
  border-radius: 1.5rem;
  width:110%;
  background: grey;
  color: white;
  font-weight: bold;
  padding: 1%;
  font-size: 20px;
  border: none;
  cursor: pointer;
}
.dropdown {
  position: relative;
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
                    <b><p style="font-size: 35px">SHRI DHARMASTHALA<br><br>MANJUNATHESHWARA COLLEGE <br><br>(AUTONOMOUS)<br><br>UJIRE</p></b>
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
              <center><h2><U><B>Player's Profile</B></U></h2></center>
              <?php
              $id=$_GET['id'];
              $table='players';
              $stmt=$admin->ret("SELECT * FROM `players` WHERE `event` LIKE '%".$id."%' ORDER BY name ASC");
              while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
              <div class="col-lg-4 col-sm-2 col-xs-12">
                <center><br>
                <div class="card">
                  <br><img src="management/controller/<?php echo $row['image'];?>" height="180px" width="150px">
                  <div>
                    <h3><?php echo $row['name'];?></h3> 
                    <h3><?php echo $row['course'];?></h3> 
                    <h3><?php echo $row['event'];?></h3> 
                  </div>
                </div><br>
                </center>
              </div>
              <?php } ?>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn" style="margin-top: 300px;border-radius: 1px;">Events</button>
            <div class="dropdown-content">
              <?php
              $table='tcategory';
              $stmt=$admin->ret("SELECT * FROM `tcategory`");
              while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
              <a href="display.php?id=<?php echo $row['c_name'];?>"><?php echo $row['c_name'];?></a>
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