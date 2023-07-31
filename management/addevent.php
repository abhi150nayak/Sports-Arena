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
  <title>SportsArena | Tournament</title>
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
            <h1>ADD TOURNAMENT DETAILS</h1>
          </div>          
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="col-md-12">
          <div class="card card-default">             
            <div class="card-body p-0">
              <div class="bs-stepper">
                <div class="bs-stepper-header" role="tablist">
                  <div class="step" data-target="#logins-part">
                    <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger"></button>
                  </div>
                </div>
                <form method="post" enctype="multipart/form-data" action="controller/addeventfile.php">
                  <div class="bs-stepper-content">
                                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Event Date</label>
                      <select name="tm" class="form-control" onchange="showCourse(this.value)" id="b" required="">
                        <option value="">Select Event Date</option>
                        <?php
                        $stmt=$admin->ret("SELECT * FROM `requestevent` where `status`='Approved' GROUP BY `e_date`");
                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                          <option value="<?php echo $row['e_date']?>">
                            <?php echo $row['e_date']?>
                          </option>
                        <?php } ?>
                      </select>
                    </div>

                    <script>
                      function showCourse(eq_id){
                        if(window.XMLHttpRequest){
                          xmlhttp=new XMLHttpRequest();
                        }else{
                          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange=function(){
                          if(xmlhttp.readyState==4 && xmlhttp.status==200)
                          {
                            var a = document.getElementById("event").innerHTML=xmlhttp.responseText;
                          }
                        }
                        xmlhttp.open("GET","getGuides2.php?eq_id="+eq_id,true);
                        xmlhttp.send();
                      }
                    </script>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Event Name</label>
                      <select name="em" class="form-control" id="event" required="" onchange="showCourse1(this.value)">
                        <option value="">Select Event Name</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Tournament Level</label>
                      <select name="tl" class="form-control" required="">
                        <option value="">Select Tournament Level</option>
                        <option value="College Level">College Level</option>
                        <option value="Taluk Level">Taluk Level</option>
                        <option value="District Level">District Level</option>
                        <option value="State Level">State Level</option>
                        <option value="National Level">National Level</option>                       
                      </select>
                    </div>

                    <script>
                      function showCourse1(eq_id){
                      var b=document.getElementById("b").value;
                        if(window.XMLHttpRequest){
                          xmlhttp=new XMLHttpRequest();
                        }else{
                          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange=function(){
                          if(xmlhttp.readyState==4 && xmlhttp.status==200)
                          {
                            var a = document.getElementById("place").innerHTML=xmlhttp.responseText;
                          }
                        }
                        xmlhttp.open("GET","getGuides3.php?eq_id="+eq_id+"&b="+b,true);
                        xmlhttp.send();
                      }
                    </script>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Venue</label>
                      <select name="place" class="form-control" id="place" onchange="showCourse3(this.value)" required="">
                        <option value="">Select Venue</option>
                      </select>
                    </div>

                    <script>
                      function showCourse3(eq_id){
                        var b=document.getElementById("b").value;
                        var event=document.getElementById("event").value;
                        if(window.XMLHttpRequest){
                          xmlhttp=new XMLHttpRequest();
                        }else{
                          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange=function(){
                          if(xmlhttp.readyState==4 && xmlhttp.status==200)
                          {
                            var a = document.getElementById("player").innerHTML=xmlhttp.responseText;
                          }
                        }
                        xmlhttp.open("GET","getGuides4.php?eq_id="+eq_id+"&b="+b+"&event="+event,true);
                        xmlhttp.send();
                      }
                    </script>

                    <div class="form-group">
                      <label for="myCheck">Players</label>
                      <div id="player"></div>                 
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Expense</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Spent Amount" name="exp" pattern="[0-9]*" title="Enter Numbers Only" required="">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Achievement</label>&nbsp&nbsp&nbsp&nbsp
                      <input type="checkBox" name="achievement" value="Winner" id="myCheck"/>Winner &nbsp                 
                      <input type="checkBox" value="1st runner" name="achievement" id="myCheck"/>1st Runner &nbsp                       
                      <input type="checkBox" name="achievement" value="2nd runner" id="myCheck"/>2st Runner &nbsp
                      <input type="checkBox" name="achievement" value="Participated"/>Participated                     
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Trophy(IF PARTICIPATED SKIP)</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Spent Amount" name="image">
                    </div>
                      
                    <input type="submit" name="submit" value="ADD" class="btn btn-primary">                     
                  </div>
                </form>                   
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
<?php } ?>