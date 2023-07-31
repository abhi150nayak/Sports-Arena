<?php
define('DIR','');
require_once DIR .'../config.php';
$control =new Controller();
$admin = new Admin();

if (isset($_POST['submit']))
{
  $name=$_POST['username'];
  $password=$_POST['password'];

  $stmt=$admin->ret("SELECT * FROM `staff` where username='$name' and password='$password'");
  $num=$stmt->rowCount();
  if($num>0)
  {
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    $id=$row['mid'];
    $_SESSION['username']=$name;
    $_SESSION['id']=$id;
    echo "<script>window.location='../index1.php';</script>";
  }
  else
  {
    echo "<script>alert('Wrong Username or Password');window.location='../index.php';</script>";
  }
}
?>
