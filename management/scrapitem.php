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
  <title>SportsArena | Scrap</title>
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
            <h1>SCRAP ITEM</h1>
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
        <th>Item Name</th>
        <th>Quantity</th>
        <th>Action</th>  
      </thead>
      <tbody>    
        <?php
          $sum = 0;
          $table='stock';
          $stmt=$admin->ret("SELECT * FROM `stock` GROUP BY `item_name`");
          while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
          $item = $row['item_name'];
          $bstmt=$admin->ret("SELECT * FROM `stock` WHERE `item_name` = '$item'");
          while($brow=$bstmt->fetch(PDO::FETCH_ASSOC)){
          $sum = $sum + $brow['quantity'];
        }?>
        <tr>
        <?php if($sum > 0){?>      
          <td><?php echo $row['item_name'];?></td>
          <td><?php echo $sum?></td>            
          <td><a href="updatestock.php?id=<?php echo $row['sid'];?>"  class="btn btn-danger">Scrap</a></td>
        <?php } ?>
        </tr>
        <?php   $sum = 0; }  ?>
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