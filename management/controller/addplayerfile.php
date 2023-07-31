<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$ename=$_POST['tm'];
$rollno=$_POST['rollno'];
$email=$_POST['email'];
$course=$_POST['course'];
$batch=$_POST['batch'];
$address=$_POST['address'];
$target_dir="uploads/";
$image=$target_dir.basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"],$image);
$blood=$_POST['bg'];
$phone=$_POST['phone'];

$stmt=$admin->cud("INSERT INTO `players`(`name`,`event`,`rollno`,`email`,`course`,`batch`,`address`,`image`,`blood`,`phone`,`username`,`date`)values('".$name."','".$ename."','".$rollno."','".$email."','".$course."','".$batch."','".$address."','".$image."','".$blood."','".$phone."','".$rollno."',now())",'Saved');

echo "<script> alert('Player Added');window.location='../viewplayer.php'</script>";
}
?>