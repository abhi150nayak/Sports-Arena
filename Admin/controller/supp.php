<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $pno=$_POST['phone'];
  $place=$_POST['place'];
  $address=$_POST['ads'];

  $stmt=$admin->cud("INSERT INTO `seller`(`sname`,`phoneno`,`place`,`address`)values('".$name."','".$pno."','".$place."','".$address."')",'Saved');
  echo "<script>alert('Supplier Details Added Successfully');window.location='../vsuppliers.php'</script>";
}
?>