<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
	
$iid=$_POST['iid'];
$sname = $_POST['name'];
$item=$_POST['item'];
$amount = $_POST['amount'];

$stmt=$admin->cud("UPDATE `item` SET `amt`='$amount'  WHERE item.iid='$iid'","Updated");
echo "<script> alert('Updated');window.location='../items.php'</script>";
?>