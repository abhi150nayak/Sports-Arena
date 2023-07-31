<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

$id=$_GET['se_id'];
$bstmt=$admin->ret("SELECT * FROM `seller` WHERE `sname` = '$id'");
$ar=$aread['se_id'];
$astmt=$admin->ret("SELECT * FROM `item` WHERE `sl_id` = '$id'");
echo "<option value=''>select item</option>";
while($read=$astmt->fetch(PDO::FETCH_ASSOC))
{
	echo "<option value='".$read['iname']."'>".$read['iname']."</option>";
}
?>

