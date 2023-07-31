<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{

	if(empty($_POST['pl'])){
		echo "<script> alert('Please Select Playes.');window.location='../requestevent.php'</script>";

	}else{
		
$name=$_POST['tm'];
$date=$_POST['date'];
$place=$_POST['place'];
$plarr=$_POST['pl'];
$budget=$_POST['budget'];
$status='pending';

if(!empty($plarr)){
    for($i = 0; $i < count($plarr); $i++){
        if(!empty($plarr[$i])){
            $ss1 = $plarr[$i];
            $ch[] = $ss1 . ",";
		}  
	}

  	$ch = implode(" ",$ch);
   	$ch = substr($ch, 0,-1);
	$stmt=$admin->cud("INSERT INTO `requestevent`(`e_name`,`e_date`,`place`,`students`,`budget`,`date`,`status`)values('".$name."','".$date."','".$place."','".$ch."','".$budget."',now(),'".$status."')",'Saved');
	echo "<script> alert('Request Sent');window.location='../vstatus.php'</script>";

}else{
		echo "<script> alert('Please Select Players.');window.location='../requestevent.php'</script>";

}

	}}
?>