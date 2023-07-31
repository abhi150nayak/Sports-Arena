<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$name=$_POST['iname'];

$stmt=$admin->cud("INSERT INTO `item`(`iname`,`date`)values('".$name."',now())",'Saved');

echo "<script> alert('Item added successfully');window.location='../additem.php'</script>";
}

?>