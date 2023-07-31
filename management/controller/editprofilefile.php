<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$mid=$_SESSION['id'];	
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$adrs=$_POST['address'];
$place=$_POST['place'];

$stmt=$admin->cud("UPDATE `staff` SET `name`='$name',`email`='$email',`phone`='$phone',`address`='$adrs',`place`='$place' WHERE staff.mid='$mid'","Updated");
echo "<script> alert('Profile Updateds successfully');window.location='../profile.php'</script>";
}
?>