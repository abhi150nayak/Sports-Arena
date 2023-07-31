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
  <title>SportsArena | Events</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid-theme.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<style>
  .b{
    margin-left:1100px; 
  }
</style>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <?php include "sidebar.php"?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>EVENT LIST</h1>
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
      <?php
      $stmt=$admin->ret("SELECT * FROM `staff` where mid='$mnid'");
      $row=$stmt->fetch(PDO::FETCH_ASSOC);
       if($row['roll']=='admin'){ ?>
      <a href="addcategory.php" class="b btn btn-primary">ADD &nbsp<i class="fa fa-plus"></a></i>
      <?php } else {}?>
      <br>
      <thead>
        <th><center>Event Name</center></th>
        <?php
        $stmt=$admin->ret("SELECT * FROM `staff` where mid='$mnid'");
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        if($row['roll']=='admin'){ ?>
        <th><center>Status</center></th>
        <?php } else {} ?>
      </thead>
      <tbody>
        <?php
        $table='category';
        $astmt=$admin->ret("SELECT * FROM `tcategory` ORDER BY `c_name` ASC");
        while($arow=$astmt->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
          <td><center><?php echo $arow['c_name'];?></td></center>
          <?php
          $stmt=$admin->ret("SELECT * FROM `staff` where mid='$mnid'");
          $row=$stmt->fetch(PDO::FETCH_ASSOC);
           if($row['roll']=='admin'){ ?>
          <td><center><a href="controller/deletecategory.php?id=<?php echo $arow['cid'];?>" onclick="return confirm('Are You Sure You Want To Delete?')" class="btn btn-danger">Delete</a></center></td>
          <?php } else{} ?>      
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