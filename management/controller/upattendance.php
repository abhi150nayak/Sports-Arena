<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_GET['present']))
{
 	$a=$_GET['a'];
 	$b=$_GET['b'];
 	$c='present';
 	$stmt=$admin->cud("INSERT INTO `attendance`(`name`,`course`,`date`,`status`)values('".$a."','".$b."',now(),'".$c."')","saved");
 	echo "<script>alert('attendance recorded');window.location='../attendance.php'</script>";
}
if(isset($_GET['absent']))
{
	$a=$_GET['a'];
	$b=$_GET['b'];
	$c='absent';
 	$stmt=$admin->cud("INSERT INTO `attendance`(`name`,`course`,`date`,`status`)values('".$a."','".$b."',now(),'".$c."')","saved");
 	echo "<script>alert('attendance recorded');window.location='../attendance.php'</script>";
}
?>
