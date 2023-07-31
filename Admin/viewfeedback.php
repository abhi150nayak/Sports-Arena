<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
?>

<?php if(isset($_SESSION['username'])){?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SportsArena | Feedback</title>
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}
.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}
.container::after {
  content: "";
  clear: both;
  display: table;
}
.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}
.time-right {
  float: right;
  color: #aaa;
}

</style>
</head>
<body>
<h2>FeedBack</h2>
  <?php  
    $stmt=$admin->ret("SELECT * FROM `feedback`");
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  ?>
<div class="container">
  <img src="dist/img/profile.png" alt="Avatar" style="width:100%;">
  <p><h5><?php echo $row['name'];?></h5>
    <h3 style="margin-left: 70px"><?php echo $row['message'];?></h3>
  </p>
  <span class="time-right"><?php echo $row['date'];?></span>
</div>
<?php } ?>
<button type="button" class="btn btn-block btn-dark" onclick="document.location='index1.php'" style="background-color: grey;margin-left: 750px;padding: 1%;border-radius: 10px;color: white" >HOME</button>
</body>
</html>
<?php } ?>
