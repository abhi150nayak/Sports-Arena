<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{

  $bug=$_POST['bug'];

  $stmt=$admin->cud("INSERT INTO `budget`(`budget`)values('".$bug."')",'Saved');

  echo "<script> alert('Budget added successfully');window.location='../viewbudget.php'</script>";
}
?>