<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$plid=$_SESSION['id'];	
$name=$_POST['name'];
$evdate=$_POST['date'];
// $desc=$_POST['des'];
$target_dir="uploads/";
$image=$target_dir.basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"],$image);

$stmt=$admin->cud("INSERT INTO `cprofile`(`pl_id`,`event`,`ev_date`,`image`,`date`)values('".$plid."','".$name."','".$evdate."','".$image."',now())","Saved");
echo "<script> alert('Image Added');window.location='../gallery.php'</script>";
}
?>