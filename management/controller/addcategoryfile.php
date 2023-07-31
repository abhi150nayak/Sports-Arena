<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$name=$_POST['tourname'];
$astmt=$admin->ret("SELECT * FROM `tcategory` where `c_name`='$name'");
$num=$astmt->rowCount();
  if($num>0)
  {
  	echo "<script> alert('Event Already Exists');window.location='../addcategory.php'</script>";
  }
  else
  {
	$stmt=$admin->cud("INSERT INTO `tcategory`(`c_name`,`date`)values('".$name."',now())",'Saved');
	echo "<script> alert('New Event Added');window.location='../viewcategory.php'</script>";
   }
}
?>