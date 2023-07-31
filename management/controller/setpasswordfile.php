<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$mid=$_SESSION['id'];	
$password=$_POST['password'];

$stmt=$admin->cud("UPDATE `staff` SET `password`='$password' WHERE staff.mid='$mid'","Updated");
echo "<script> alert('Password Added Successfully');window.location='../index1.php'</script>";
}
?>