<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$pid=$_SESSION['id'];	
$password=$_POST['password'];

$stmt=$admin->cud("UPDATE `players` SET `password`='$password' WHERE players.pid='$pid'","Updated");
echo "<script> alert('Password Set');window.location='../index2.php'</script>";
}
?>