<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
?>
<?php if(isset($_SESSION['username'])){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SportsArena | Players</title>
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
            <h1>PLAYERS DETAILS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <table class="table table-stripped table-advance table-hover" border=2> 
      <hr>
      <thead>
        <th>Name</th>
        <th>Roll No.</th>
        <th>Email_Id</th>
        <th>Event Name</th>
        <th>Course</th>
        <th>Blood Group</th>
        <th>Phone No.</th>
        <th>Image</th>
        <?php if($row['roll']=='admin'){ ?>
        <th>Action</th>
        <th>Additional <br>Event</th>
        <?php }else{}?>
      </thead>
      <tbody>    
      <?php
      $table='user';
      $stmt=$admin->ret("SELECT * FROM `players` ORDER BY `name` ASC");
      while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
        <tr>      
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['rollno'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['event'];?></td>
          <td><?php echo $row['course'];?></td>
          <td><?php echo $row['blood'];?></td>
          <td><?php echo $row['phone'];?></td>
          <td><img src="controller/<?php echo $row['image'];?>" height="90px" width="90px"></td>
          <?php 
          $astmt=$admin->ret("SELECT * FROM `staff` where mid='$mnid'");
          $arow=$astmt->fetch(PDO::FETCH_ASSOC);
          if($arow['roll']=='admin'){ ?>
          <td><a href="controller/deleteplayer.php?id=<?php echo $row['pid'];?>" onclick="return confirm('Are You Sure You Want To Delete?')" class="btn btn-danger">Delete</a></td>
          <td><center><a href="additioneven.php?id=<?php echo $row['pid'];?>" onclick="return confirm('Are You Sure You Want To Add?')" class="btn btn-success">+</a></center></td>
          <?php }else{}?>
        </tr>
      <?php }?>
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