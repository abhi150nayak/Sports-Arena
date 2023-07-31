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
  <title>SportsArena | StaffDashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <?php include "header.php"?>
  <?php include "sidebar.php"?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">SDM Sports Department</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <?php
            $stmt=$admin->ret("SELECT count(*) FROM `players`");
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            $r=implode($row);
            ?>
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $r ?></h3>
                <p>Players</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="viewplayer.php" class="small-box-footer"></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <?php
            $stmt=$admin->ret("SELECT count(*) FROM `tcategory` ");
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            $u=implode($row);
            ?>
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $u ?></h3>
                <p>Events</p>
              </div>
              <div class="icon">
                <i class="fas fa-copy"></i>
              </div>
              <a href="viewevent.php" class="small-box-footer"></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <?php
            $stmt=$admin->ret("SELECT count(*) FROM `event`");
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            $t=implode($row);
            ?>
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 style="color:white"><?php echo $t ?></h3>
                <p style="color:white">Tournaments</p>
              </div>
              <div class="icon">
                <i class="fas fa-table-tennis"></i>
              </div>
              <a href="viewtrophy.php" class="small-box-footer"> </a>
            </div>
          </div>
        </div>
      </div>
    </section> 
  </div>
  <?php include "footer.php"?> 
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
<?php } ?>