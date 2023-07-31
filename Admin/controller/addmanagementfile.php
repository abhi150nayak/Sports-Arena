<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $designation=$_POST['designation'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $place=$_POST['place'];
  $user=$_POST['user'];

  if(isset($_POST['admin'])){
      $roll=$_POST['admin'];
  }else{
    $roll = '';
  }


  $stmt=$admin->cud("INSERT INTO `staff`(`name`,`designation`,`email`,`phone`,`address`,`place`,`username`,`roll`,`date`)values('".$name."','".$designation."','".$email."','".$phone."','".$address."','".$place."','".$user."','".$roll."',now())",'Saved');
  echo "<script> alert('Staff added successfully');window.location='../viewmanagement.php'</script>";
}
?>