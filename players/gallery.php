<?php 
define('DIR','');
require_once DIR .'config.php';
$contol = new Controller();
$admin = new Admin();

?>
<?php if(isset($_SESSION['username'])){
  $plid=$_SESSION['id'];
$stmt=$admin->ret("SELECT * FROM `players` where pid='$plid'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$result=$row['name'];
$result1=$row['pid'];

}?>

<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Site Metas -->
   <title>Game Info</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="../style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="../css/colors.css">
   <!-- ALL VERSION CSS --> 
   <link rel="stylesheet" href="../css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="../css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="../css/custom.css">
   <!-- font family -->
   <link href="../https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="../css/3dslider.css" />
   <script src="../http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="../http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="../js/3dslider.js"></script>

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
  /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);*/
/*  max-width: 100px;
  max-height: 200px;*/
  margin: auto;
  text-align: center;
  font-family: arial;
  font-size: 15px;
  background-color: white;
    border: 5px black;
  border-radius: 5rem;
  box-sizing: auto;

}
img{
  border: 5px solid white;
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
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
   </head>
   <body class="game_info" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loading-img.gif" alt="">
      </div>
      
      <section id="contant" class="contant">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-sm-12 col-xs-12">
                  <div class="news-post-holder">
                     <u><h1 style="text-align:center">Gallery</h1></u>
<?php

    $table='cprofile';
    $stmt=$admin->ret("SELECT * FROM `cprofile` WHERE `pl_id`='$result1'");
    while($row1=$stmt->fetch(PDO::FETCH_ASSOC)){


    ?>
                     <div class="col-lg-4 col-sm-2 col-xs-12">
                        
                           <br><div class="card">
                        <br> <img src="controller/<?php echo $row1['image'];?>" height="300px" width="350px" ><br>
                        <br><div>

                         <h2><?php echo $row1['event'];?></h2>
                           
                           <h2><?php echo $row1['ev_date'];?></h2>
                           <!-- <h2><?php echo $row1['description'];?></h2> -->
                         </div>
                           <div style="margin: 24px 0;">
   
                           </div>
                        

                        </div>
                     </div>
                     <?php } ?>
                  </div>
               </div>
               <br><br><a href="index2.php" class="b title" style="background-color:#4322">BACK</a>
                 
               </div>
            </div>
         </div>
      </section>
      
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="../js/all.js"></script>
      <!-- ALL PLUGINS -->
      <script src="../js/custom.js"></script>
   </body>
</html>