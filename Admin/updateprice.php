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
  <title>SportsArena | Stock</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php include "header.php"?>
  <?php include"sidebar.php" ?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>UPDATE PRICE</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
       <div class="row">
          <div class="col-md-12">
            <div class="card card-default"> 
              <div class="card-body p-0">
                <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger"></button>
                    </div>
                  </div>
                  <form method="post" action="controller/updatepricefile.php">
                    <div class="bs-stepper-content">
                      <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                        <?php
                          $id=$_GET['id'];
                          $stmt=$admin->ret("SELECT * FROM `item` where `iid`='$id'");
                          $row=$stmt->fetch(PDO::FETCH_ASSOC);
                          $astmt=$admin->ret("SELECT * FROM `seller` where `se_id`=".$row['sl_id']);
                          $arow=$astmt->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <input type="hidden" value="<?php echo $row['iid'];?>" name="iid" >
                        <div class="form-group">
                          <label for="exampleInputEmail1">Supplier Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="name" required="" value="<?=$arow['sname'] ?>" readonly>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Item</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Item" name="item" required="" value="<?=$row['iname'] ?>" readonly>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Amount</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Amount" name="amount" pattern="[0-9]*" title="Enter Numbers Only" required="" value="<?=$row['amt'] ?>">
                        </div>

                        <input type="submit" name="sub" value="UPDATE" class="btn btn-primary">
                      
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include "footer.php" ?>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/select2/js/select2.full.min.js"></script>
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="plugins/dropzone/min/dropzone.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(function () {})
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })
</script>
</body>
</html>
<?php }?>