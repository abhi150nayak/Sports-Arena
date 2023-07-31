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
  <title>SportsArena | Players</title>
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
  <?php include"sidebar.php"?> 
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ADD PLAYERS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index1.php">Home</a></li>             
            </ol>
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
                  <form method="post" enctype="multipart/form-data" action="controller/addplayerfile.php">
                    <div class="bs-stepper-content">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name" pattern="[A-Za-z\s]*" title="Enter Characters Only" required="">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Roll No.</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Roll Number" name="rollno" pattern="[0-9]{6}" title="Enter 6 Digit Numbers Only" required="">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Email Id</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email_Id" name="email" required="">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Event Name</label>
                        <select name="tm" class="form-control" required="">
                          <option value="">Select Event</option>
                          <?php
                          $stmt=$admin->ret("SELECT * FROM `tcategory`");
                          while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                            <option value="<?php echo $row['c_name']?>">
                              <?php echo $row['c_name']?>
                            </option>
                          <?php } ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Course</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Course" name="course" required="">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Batch</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Batch (yyyy-yy)" name="batch" required="">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Blood Group</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Blood Group" name="bg" required="">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Profile</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Image" name="image" required="">
                      </div> 

                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone No.</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number" name="phone" pattern="[0-9]{10}" title="Enter 10 Digit Number Only" required="">
                      </div> 

                      <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Address" name="address" required="">
                      </div>
                          
                      <input type="submit" name="submit" value="REGISTER" class="btn btn-primary">                     
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
  <?php include "footer.php"?>  
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
</body>
</html>
<?php }?>