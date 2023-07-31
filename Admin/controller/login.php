<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

if (isset($_POST['submit'])) 
{
  $name = $_POST['username'];  
  $password = $_POST['password']; 

  $stmt=$admin->ret("SELECT username, password FROM `admin`WHERE username='$name'and password='$password'");
  $row=$stmt->fetch(PDO::FETCH_ASSOC);
   $num=$stmt->rowCount();
   if($num>0)
   {
     $_SESSION['username']=$name;
     echo "<script>window.location='../index1.php';</script>"; 
   }
  else
    { 
      echo "<script> alert('Please check your username and password');window.location='../index.php';</script>";
    }
}
?>