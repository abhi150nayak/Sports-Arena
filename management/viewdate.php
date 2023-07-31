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
            <h1>EVENT DETAILS</h1>
          </div>
          <div class="col-sm-6">
            <b>Search: </b><input type="text" name="search" class="" placeholder="Enter Tournament Name" onkeyup="searchit(this.value)">
            <form action="viewdate.php">
              <div class="col-sm-6">
                <table>
                  <th colspan="3">Search By Date:</th>
                  <tr>
                    <td>From:</td><td> <input type="date" id="datepicker" class="form-control" id="exampleInputEmail1" required="" name="from" /></td>
                    <td>To:</td><td> <input type="date" id="datepicker" class="form-control" id="exampleInputEmail1" required="" name="to" /></td>
                    <td><input type="submit" value="view"></td><td><input type="submit" value="BACK" onclick="document.location='viewevent.php'"> </td>
                  </tr>
                </table>
            </form>
          </div>
        </div>
      </div>
    </section>
    <table class="table table-stripped table-advance table-hover" border="2">
      <hr>
      <thead>
        <?php
        $stmt=$admin->ret("SELECT * FROM `staff` where mid='$mnid'");
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        if($row['roll']=='admin'){?>
        <th>Tournament Name</th>
        <th>Tournament Level</th>
        <th>Event Date</th>
        <th>Place</th>
        <th>Participants</th>
        <th>Achievement</th>
        <th>Expense</th>
        <th>Action</th>
        <?php } else{ ?>
        <th>Tournament Name</th>
        <th>Tournament Level</th>
        <th>Event Date</th>
        <th>Place</th>
        <th>Participants</th>
        <th>Achievement</th>
        <th>Expense</th>
        <?php }?>
      </thead>
      <tbody id="result">
        <?php
        $stmt=$admin->ret("SELECT * FROM `staff` where mid='$mnid'");
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        if($row['roll']=='admin'){ ?>
        <?php
        $from=$_GET['from'];
        $to=$_GET['to'];
        $table='event';
        $zstmt=$admin->ret("SELECT * FROM `event` where `ev_date` BETWEEN '$from' AND  '$to'");
        while($zrow=$zstmt->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
          <td><?php echo $zrow['tournament_name'];?></td>
          <td><?php echo $zrow['level'];?></td>
          <td><?php echo $zrow['ev_date'];?></td>
          <td><?php echo $zrow['place'];?></td>
          <td><?php echo $zrow['players'];?></td>
          <td><?php echo $zrow['achievement'];?></td>
          <td><?php echo $zrow['expense'];?></td>   
          <td><a href="controller/deleteevent.php?id=<?php echo $zrow['eid'];?>" onclick="return confirm('Are You Sure You Want To Delete?')" class="btn btn-danger">Delete</a></td>     
          <?php } ?>
        </tr>
        <?php } else{ ?>
        <?php
        $from=$_GET['from'];
        $to=$_GET['to'];
        $table='event';
        $stmt=$admin->ret("SELECT * FROM `event` where `ev_date` BETWEEN '$from' AND  '$to'");
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>     
          <td><?php echo $row['tournament_name'];?></td>
          <td><?php echo $row['level'];?></td>
          <td><?php echo $row['ev_date'];?></td>
          <td><?php echo $row['place'];?></td>
          <td><?php echo $row['players'];?></td>
          <td><?php echo $row['achievement'];?></td>
          <td><?php echo $row['expense'];?></td>   
        </tr>
        <?php } ?>
      </tbody>     
      <?php }?>
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
xmlhttp.open("GET", "getresult.php?q=" + alm, true);
xmlhttp.send();
}
</script>
</body>
</html>
<?php }?>