<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

$id=$_GET['cid'];
$astmt=$admin->ret("SELECT * FROM `attendance` where `date` like '".$id."%' AND `status`='present'");
$num=$astmt->rowcount();
?>
<label for="exampleInputEmail1">Total Students</label>
<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Quantity" name="ts" value="<?php echo $num ?>">
