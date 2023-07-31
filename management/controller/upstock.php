<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$sid=$_POST['sid'];	
$name=$_POST['name'];
$astmt=$admin->ret("SELECT * FROM  `stock` WHERE `sid`='$sid'");
$arow=$astmt->fetch(PDO::FETCH_ASSOC);
$ress=$arow['quantity'];
$pass=$ress - $name;

$stmt=$admin->cud("UPDATE `stock` SET `quantity`='$pass' WHERE stock.sid='$sid'","Updated");
echo "<script> alert('Scrap Deleted Successfully');window.location='../scrapitem.php'</script>";
}
?>