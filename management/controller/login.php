<?php
define('DIR','');
require_once DIR .'../config.php';
$control =new Controller();
$admin = new Admin();

if (isset($_POST['submit']))
{
  $name=$_POST['username'];
  $stmt=$admin->ret("SELECT * FROM `staff` where username='$name'");
  $num=$stmt->rowCount();
  if($num>0)
  {
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    $id=$row['mid'];
    $_SESSION['username']=$name;
    $_SESSION['id']=$id;
    echo "<script>window.location='../setpassword.php';</script>";
  }
  else
  {   
    echo "<script>alert('Please Enter Correct Username');window.location='../login.php';</script>";
  }
}
?>
