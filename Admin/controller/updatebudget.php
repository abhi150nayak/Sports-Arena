<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
	
$bid = $_POST['bid'];
$bug=$_POST['bug'];

$stmt=$admin->cud("UPDATE `budget` SET `budget`='$bug'  WHERE budget.bid='$bid'","Updated");
echo "<script> alert('Budget updated');window.location='../viewbudget.php'</script>";
?>