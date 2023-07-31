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
  <title>SportsArena | Player</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../management/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../management/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="../management/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../management/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../management/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../management/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../management/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../management/plugins/summernote/summernote-bs4.min.css">
</head>
<style type="text/css">
  section{
    padding-top: 200px;
    padding-left: 400px;
  }
</style>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <a href="editprofile.php" style="color:white"/><p>Edit Profile</p>
          </div>
          <div class="icon"></div>
          <a href="#" class="small-box-footer"> </a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <a href="addimage.php" style="color:white"/><p>Add Image</p>
          </div>
          <div class="icon"></div>
          <a href="#" class="small-box-footer"></a>
        </div>
      </div>
    </div>
  </div>
</section>
<input type="button" name="submit" class="btn btn-primary" value="BACK" onclick="document.location='index1.php'" style="margin-left: 1400px;margin-top: 300px;">
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="../management/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../management/plugins/chart.js/Chart.min.js"></script>
<script src="../management/plugins/sparklines/sparkline.js"></script>
<script src="../management/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../management/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="../management/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="../management/plugins/moment/moment.min.js"></script>
<script src="../management/plugins/daterangepicker/daterangepicker.js"></script>
<script src="../management/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../management/plugins/summernote/summernote-bs4.min.js"></script>
<script src="../management/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../management/dist/js/adminlte.js"></script>
<script src="../management/dist/js/demo.js"></script>
<script src="../management/dist/js/pages/dashboard.js"></script>
</html>
<?php } ?>