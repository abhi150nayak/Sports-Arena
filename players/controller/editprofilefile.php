<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$pid=$_SESSION['id'];	
$name=$_POST['name'];
$rno=$_POST['rollno'];
$course=$_POST['course'];
$batch=$_POST['batch'];
$event=$_POST['event'];
$bgroup=$_POST['bg'];
$pno=$_POST['phone'];
$email=$_POST['email'];
$ads=$_POST['ads'];

$stmt=$admin->cud("UPDATE `players` SET `name`='$name',`rollno`='$rno',`course`='$course',`email`='$email',`batch`='$batch' ,`event`='$event',`blood`='$bgroup',`phone`='$pno',`address`='$ads' WHERE players.pid='$pid'","Updated");
echo "<script> alert('Profile Updated');window.location='../index2.php'</script>";
}
?>