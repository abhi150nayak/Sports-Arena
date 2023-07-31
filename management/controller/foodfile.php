<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$date=$_POST['date'];
$students=$_POST['ts'];
$tot=50 * $students;

$stmt=$admin->cud("INSERT INTO `food`(`date`,`students`,`amount`)values('".$date."','".$students."','".$tot."')",'Saved');
echo "<script> alert('Recorded');window.location='../viewfood.php'</script>";
}
?>