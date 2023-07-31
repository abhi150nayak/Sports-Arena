<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
$pid=$_POST['pid'];
$acharr=$_POST['ach'];

if(!empty($acharr)){
	for($i = 0; $i < count($acharr); $i++){
    	if(!empty($acharr[$i])){
            $ss1 = $acharr[$i];
            $ch[] = $ss1 . ",";                     
		}  
	}
    $ch = implode(" ",$ch);
    $ch = substr($ch, 0,-1);
    $astmt=$admin->ret("SELECT * FROM `players` where `pid`='$pid'");
	$arow=$astmt->fetch(PDO::FETCH_ASSOC);
	$t=$arow['event'] . ",".$ch;

	$stmt=$admin->cud("UPDATE `players` set `event`='$t' where players.pid='$pid'","updated");
}
echo "<script> alert('New Event Added');window.location='../viewplayer.php'</script>";
}
?>