<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

$id=$_GET['eq_id'];
$b=$_GET['b'];
$event=$_GET['event'];
$astmt=$admin->ret("SELECT * FROM `requestevent` WHERE `place` = '$id' and `e_date`='$b' and `e_name`='$event'");
while($read=$astmt->fetch(PDO::FETCH_ASSOC))
{
	if(!empty($read['students'])){
            $str = $read['students'];
            $a = (explode(",", $str));
            for($i = 0; $i < count($a);$i++){
                $sch = $a[$i];  
				echo "<br><input type='checkbox' name='play[]' value='".$sch."'>"  .$sch;
            }

     }
}
?>

