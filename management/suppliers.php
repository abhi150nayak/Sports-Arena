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
            <h1>STOCK DETAILS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <b>Search: </b><input type="text" name="search" class="" placeholder="Enter Item Name" onkeyup="searchit(this.value)">
              <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <table class="table table-stripped table-advance table-hover" border="2">
      <hr>
        <thead>
          <th>Seller Name</th>
          <th>Item Name</th>
          <th>Price</th>
        </thead>
        <tbody  id="result">
          <?php
          $stmt=$admin->ret("SELECT * FROM `item` ORDER BY `sl_id`");
          while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
          $astmt=$admin->ret("SELECT * FROM `seller` WHERE se_id=".$row['sl_id']);
          $arow=$astmt->fetch(PDO::FETCH_ASSOC)
          ?>
          <tr>
            <td><?php echo $arow['sname'];?></td>
            <td><?php echo $row['iname'];?></td>
            <td><?php echo $row['amt'];?></td>
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
<script type="text/javascript">
  function searchit(alm)
  {
    var xmlhttp = new XMLHttpRequest();
     xmlhttp.onreadystatechange = function(){
      if(this.readyState==4 && this.status==200){
     
   document.getElementById("result").innerHTML=this.responseText;
 }
  };
xmlhttp.open("GET", "getresult2.php?q=" + alm, true);
xmlhttp.send();
}
</script>
</body>
</html>
<?php }?>
