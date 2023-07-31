<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

$id=$_GET['id'];
$stmt=$admin->cud("DELETE FROM `players` where pid=".$id, "Deleted");
echo "<script> alert('Player Record Deleted'); window.location='../viewplayer.php'</script> ";
?>