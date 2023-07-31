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
  <title>SportsArena | Food</title>
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
            <h1>FOOD RECORD</h1>
          </div>
          <div class="col-sm-6">
            <form action="viewdate2.php">
              <div class="col-sm-6">
                <table>
                  <th colspan="3">Search By Date:</th>
                  <tr>
                    <td>From:</td><td> <input type="date" id="datepicker" class="form-control" id="exampleInputEmail1" required="" name="from" /></td>
                    <td>To:</td><td> <input type="date" id="datepicker" class="form-control" id="exampleInputEmail1" required="" name="to" /></td>
                    <td><input type="submit" value="view"></td><td><input type="submit" value="BACK" onclick="document.location='viewfood.php'"> </td>
                  </tr>
                </table>
              </div>
            </form>            
          </div>
        </div>
      </div>
    </section>
    <table class="table table-stripped table-advance table-hover" border=2>  
      <hr>
      <thead>   
        <th>Date</th>
        <th>Total Students</th>
        <th>Amount</th>   
      </thead>
      <tbody> 
        <?php
          $from=$_GET['from'];
          $to=$_GET['to'];
          $table='food';
          $stmt=$admin->ret("SELECT * FROM `food` where `date` BETWEEN '$from' AND  '$to'");
          $subtotal=0;
          $total=0;
          while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>      
          <td><?php echo $row['date'];?></td>
          <td><?php echo $row['students'];?></td>
          <td><?php echo $total=$row['amount'];
          $subtotal=$subtotal+$total;?></td>     
        </tr>
          <?php }?>
        <tr style="background-color: lightgray;font-size: 20px;">
          <td colspan="2"><center><b>Total Expense:</b></center></td>
          <td><?php echo $subtotal ?></td>
        </tr>
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
<?php }?>