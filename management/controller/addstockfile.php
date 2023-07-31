<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$name=$_POST['iname'];
$jname=$_POST['jname'];
$qty=$_POST['quantity'];
$pdate=$_POST['pdate'];

$cstmt=$admin->ret("SELECT * FROM `item` WHERE `sl_id`='$name' AND `iname`='$jname'");
$crow=$cstmt->fetch(PDO::FETCH_ASSOC);
$price=$qty*$crow['amt'];

$mstmt=$admin->cud("INSERT INTO `buy`(`sname`,`item`,`quantity`,`price`,`dop`)values('".$name."','".$jname."','".$qty."','".$price."','".$pdate."')",'Saved');

$astmt = $admin -> ret("SELECT * FROM `stock` WHERE `seller_id` = '$name' AND `item_name`='$jname'");
$num = $astmt -> rowCount();
if($num > 0){
	$arow = $astmt -> fetch(PDO::FETCH_ASSOC);
	$oldq = $arow['quantity'];
	$newq = $_POST['quantity'];
	$updedq = $oldq + $newq;
	$mstmt=$admin->cud("UPDATE `stock` set `quantity`='$updedq' WHERE `seller_id` = '$name' AND `item_name`='$jname'","updated");
	echo "<script> alert('Stock Added');window.location='../viewstock.php'</script>";
}else{
	$qty=$_POST['quantity'];
	$pdate=$_POST['pdate'];
	$stmt=$admin->cud("INSERT INTO `stock`(`seller_id`,`item_name`,`quantity`,`price`,`date_of_purchase`,`date`)values('".$name."','".$jname."','".$qty."','".$price."','".$pdate."',now())",'Saved');
	echo "<script> alert('Stock Added');window.location='../viewstock.php'</script>";
}
}
?>