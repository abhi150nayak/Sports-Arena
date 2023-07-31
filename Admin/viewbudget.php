<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

$da=date('Y');

$table='food';
$stmt=$admin->ret("SELECT * FROM `food` WHERE `date` LIKE '".$da."%'");
$subtotal=0;
$total=0;
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
  {
    $total=$row['amount'];
    $subtotal=$subtotal+$total;
  } 

$table='injury';
$stmt=$admin->ret("SELECT * FROM `injury` WHERE `date` LIKE '".$da."%'");
$subtotal1=0;
$total1=0;
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
  {
    $total1=$row['paid'];
    $subtotal1=$subtotal1+$total1;
  } 

$table='event';
$stmt=$admin->ret("SELECT * FROM `event` where `ev_date` LIKE '".$da."%' ");
$subtotal2=0;
$total2=0;
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
  {
    $total2=$row['expense'];
    $subtotal2=$subtotal2+$total2;
  } 
?>

<?php if(isset($_SESSION['username'])) { ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SportsArena | Budget</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid-theme.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<style>
      
.title{
  border:none;
  border-radius: 0.8rem;
  padding:0.9%;
  width:10%;
  font-weight: bold;
  font-size: 10px;
  cursor:pointer;
  background:#41c365;
  color: white;
}
</style>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <?php include "sidebar.php" ?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>BUDGET DETAILS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <?php
    $table='budget';
    $stmt=$admin->ret("SELECT * FROM `budget`");
    $row=$stmt->fetch(PDO::FETCH_ASSOC)
    ?>
    <a href="addbudget.php?id=<?php echo $row['bid'];?>" onclick="return confirm('Are You Sure You Want To Update?')" class="title" style="margin-left: 1100px;">UPDATE ANNUAL BUGDET</a>
   
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-2 col-6">
            <?php
             $table='budget';
             $stmt=$admin->ret("SELECT * FROM `budget`");
             while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            ?>
      
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $row['budget']; } ?></h3>
                <p>Allocated Budget</p>
              </div>
              <div class="icon">
                <i class="fas fa-rupee-sign"></i>
              </div>
              <a href="#" class="small-box-footer"></a>
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $subtotal2 ?></h3>
                <p>Event Expense</p>
              </div>
              <div class="icon">
                <i class="fa fa-rupee-sign"></i>
              </div>
              <a href="#" class="small-box-footer"> </a>
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $subtotal ?></h3>
                <p>Food Expense</p>
              </div>
              <div class="icon">
                <i class="fa fa-rupee-sign"></i>
              </div>
              <a href="#" class="small-box-footer"> </a>
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?php echo $subtotal1  ?></h3>
                <p>Hospital Expense</p>
              </div>
              <div class="icon">
                <i class="fa fa-rupee-sign"></i>
              </div>
              <a href="#" class="small-box-footer"> </a>
            </div>
          </div>

          <div class="col-lg-2 col-6">
           <?php
            $table='budget';
            $stmt=$admin->ret("SELECT * FROM `budget`");
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            $remaining=$row['budget']-$subtotal2;
           ?>
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $remaining; } ?></h3>
                <p>Remaining Budget</p>
              </div>
              <div class="icon">
                <i class="fas fa-rupee-sign"></i>
              </div>
              <a href="#" class="small-box-footer"></a>
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
<script src="plugins/jsgrid/demos/db.js"></script>
<script src="plugins/jsgrid/jsgrid.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php } ?>