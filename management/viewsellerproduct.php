<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

?>
<?php if(isset($_SESSION['username'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SportsArena | Stock</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- jsGrid -->
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="plugins/jsgrid/jsgrid-theme.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 <?php include "sidebar.php"
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>STOCK DETAILS</h1>
          </div>
           <div class="col-sm-6">
            <b>Search: </b><input type="text" name="search" class="" placeholder="Enter Item Name" onkeyup="searchit(this.value)"><a href="index1.php" class="title">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index1.php">Home</a></li>
              <!-- <li class="breadcrumb-item active">jsGrid</li> -->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
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
$astmt=$admin->ret("SELECT * FROM `seller`");
    while($arow=$astmt->fetch(PDO::FETCH_ASSOC)):

$d_arr[$arow['se_id']]=$arow['sname'];
    endwhile;
    
    $stmt=$admin->ret("SELECT * FROM `item`");
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

   
    ?>
    <tr>
      
      <td><?php echo $d_arr[$row['sl_id']];?></td>
      <td><?php echo $row['iname'];?></td>
      <td><?php echo $row['amt'];?></td>
            </tr>
  <?php }?>
    
  </tbody>
</table>
    <!-- Main content -->
    <section class="content">
      <div class="card">
       
        <!-- /.card-header -->
        <!-- <div class="card-body"> -->
          <div id="jsGrid1"></div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "footer.php"

  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jsGrid -->
<script src="plugins/jsgrid/demos/db.js"></script>
<script src="plugins/jsgrid/jsgrid.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
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
<!-- Page specific script -->
<!-- <script>
  $(function () {
    $("#jsGrid1").jsGrid({
        height: "100%",
        width: "100%",

        sorting: true,
        paging: true,

        data: db.clients,

        fields: [
            { name: "Name", type: "text", width: 150 },
            { name: "Roll No.", type: "number", width: 50 },
            { name: "Email", type: "text", width: 200 },
            { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
            { name: "Married", type: "checkbox", title: "Is Married" }
        ]
    });
  });
</script> -->
</body>
</html>
<?php }?>
