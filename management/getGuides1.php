<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

$id=$_GET['cid'];
$astmt=$admin->ret("SELECT * FROM `tcategory` WHERE `c_name` = '$id'");
while($aread=$astmt->fetch(PDO::FETCH_ASSOC)){ 
$pid=$aread['c_name'];
$stmt=$admin->ret("SELECT * FROM `players` WHERE `event` LIKE '%".$pid."%' ORDER BY name ASC");
while($read=$stmt->fetch(PDO::FETCH_ASSOC))
{
	echo "<br><input type='checkbox' name='pl[]' value='".$read['name']."'>"  .$read['name'];
}
}
?>