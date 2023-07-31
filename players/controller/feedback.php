<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$stmt=$admin->cud("INSERT INTO `feedback`(`name`,`email`,`phone`,`message`,`date`)values('".$name."','".$email."','".$phone."','".$message."',now())",'Saved');
echo "<script> alert('Feedback Sent');window.location='../index2.php'</script>";
}
?>