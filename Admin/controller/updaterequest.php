<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

if (isset($_GET['id'])) 
{
 $id = $_GET['id'];	
 $stmt=$admin->cud("UPDATE `requestevent` SET `status`='Approved'  WHERE eq_id='$id'","Updated");
 echo "<script> alert('Event Approved successfully');window.location='../viewrequest.php'</script>";
}
?>