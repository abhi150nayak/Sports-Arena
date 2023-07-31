<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

$id=$_GET['eq_id'];
$b=$_GET['b'];

$astmt=$admin->ret("SELECT * FROM `requestevent` WHERE `e_name` = '$id' and `status`='Approved' and `e_date`='$b'");
echo "<option value=''>Select Place</option>";
while($read=$astmt->fetch(PDO::FETCH_ASSOC))	
{
	echo "<option value='".$read['place']."'>".$read['place']."</option>";
}
?>

