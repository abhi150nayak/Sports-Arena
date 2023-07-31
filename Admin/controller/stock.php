<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['sub']))
{
 $name=$_POST['tm'];
 $item=$_POST['item'];
 $amount=$_POST['amount'];

 $astmt=$admin->ret("SELECT * FROM `item` WHERE `iname`='$item' and `sl_id`='$name'");
 $num = $astmt -> rowCount();
  if($num > 0){
    echo"<script>alert('item already exist');window.location.href='../supplierstock.php';</script>";
  } 
  else
  {
   $stmt=$admin->cud("INSERT INTO `item`(`iname`,`sl_id`,`amt`)values('".$item."','".$name."','".$amount."')",'Saved');
   echo "<script> alert('Supplier item Details Added Successfully');window.location='../supplierstock.php'</script>";
  }
}
?>