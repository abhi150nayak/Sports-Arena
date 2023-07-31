<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

$id=$_GET['id'];
$stmt=$admin->cud("DELETE FROM `tcategory` where cid=".$id, "Deleted");
echo "<script> alert('Event Deleted'); window.location='../viewcategory.php'</script> ";
?>