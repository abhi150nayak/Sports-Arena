<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
?>
<?php if(isset($_SESSION['username'])){?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SportsArena | Trophy</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid-theme.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include "sidebar.php"?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ACHIEVEMENTS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <table class="table table-stripped table-advance table-hover" border="2">  
      <hr>
      <thead>   
        <th>Event Name</th>
        <th>Tournament Level</th>
        <th>Date</th>
        <th>Venue</th>
        <th>Achievement</th>
        <th>Image</th>
      </thead>
      <tbody>    
        <?php
        $table='event';
        $stmt=$admin->ret("SELECT * FROM `event` order by `level`");
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        if ($row['achievement']=='Participated') {}
        else{
        if(isset($row['trophy'])){?>
        <tr>      
          <td><?php echo $row['tournament_name'];?></td>
          <td><?php echo $row['level'];?></td>
          <td><?php echo $row['ev_date'];?></td>
          <td><?php echo $row['place'];?></td>
          <td><?php echo $row['achievement'];?></td>
          <?php if ($row['trophy']=='uploads/') {}else{ ?>
          <td><img src="controller/<?php echo $row['trophy'];?>" height="80px" width="80px"></td> 
          <?php } ?>  
        </tr>
        <?php }?>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <?php include "footer.php"?>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/jsgrid/demos/db.js"></script>
<script src="plugins/jsgrid/jsgrid.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php } ?>