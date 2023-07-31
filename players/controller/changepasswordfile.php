<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$pid=$_SESSION['id'];
$username=$_POST['user'];
$oldpassword=$_POST['oldpass'];
$newpassword=$_POST['newpass'];

$astmt=$admin->ret("SELECT * FROM `players` where `pid`='$pid'");
$arow=$astmt->fetch(PDO::FETCH_ASSOC);
if ($arow['username']==$username) {
	if ($arow['password']==$oldpassword) {
		$stmt=$admin->cud("UPDATE `players` SET `password`='$newpassword' WHERE players.pid='$pid'","Updated");
		echo "<script> alert('New Password Set');window.location='../editprofile.php'</script>";
	}
	else{
		echo "<script> alert('Wrong Password');window.location='../changepassword.php'</script>";
	}
}
else{
	echo "<script> alert('Wrong User Name');window.location='../changepassword.php'</script>";
}
}
?>