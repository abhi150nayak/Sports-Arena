<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$name=$_POST['pname'];
$event=$_POST['ename'];
$edate=$_POST['edate'];
$achievement=$_POST['ach'];

$stmt=$admin->cud("INSERT INTO `special`(`play_id`,`event`,`ev_date`,`achievement`)values('".$name."','".$event."','".$edate."','".$achievement."')",'Saved');

echo "<script> alert('Details Added');window.location='../index1.php'</script>";
}
?>