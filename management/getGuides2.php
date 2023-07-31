<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

$id=$_GET['eq_id'];
$astmt=$admin->ret("SELECT * FROM `requestevent` WHERE `e_date` = '$id'");
echo "<option value=''>Select Event Name</option>";
while($read=$astmt->fetch(PDO::FETCH_ASSOC))
{
	echo "<option value='".$read['e_name']."'>".$read['e_name']."</option>";
}
?>

