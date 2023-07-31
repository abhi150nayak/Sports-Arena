<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

$id=$_GET['id'];
$stmt=$admin->cud("DELETE FROM `event` where eid=".$id, "Deleted");
echo "<script> alert('Deleted Successfully'); window.location='../viewevent.php'</script> ";
?>