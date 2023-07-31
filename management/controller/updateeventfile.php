<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{

$eid=$_POST['eid'];	
$name=$_POST['name'];
$date=$_POST['date'];
$place=$_POST['place'];
$description=$_POST['desc'];
$achievement=$_POST['achievement'];


$stmt=$admin->cud("UPDATE `event` SET `tournament_name`='$name',`ev_date`='$date',`place`='$place',`description`='$description',`achievement`='$achievement' WHERE event.eid='$eid'","Updated");

			echo "<script> alert('Event Updateds successfully');window.location='../viewevent.php'</script>";
}

?>