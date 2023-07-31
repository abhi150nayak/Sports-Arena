<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$name=$_POST['sn'];
$injury=$_POST['injury'];
$from=$_POST['from'];
$to=$_POST['to'];
$amount=$_POST['amount'];
$paid=$_POST['paid'];

$stmt=$admin->cud("INSERT INTO `injury`(`pname`,`injury`,`fromd`,`tod`,`amount`,`paid`,`date`)values('".$name."','".$injury."','".$from."','".$to."','".$amount."','".$paid."',now())",'Saved');
echo "<script> alert('Recorded');window.location='../viewhealth.php'</script>";
}
?>