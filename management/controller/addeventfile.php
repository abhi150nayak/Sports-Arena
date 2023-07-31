<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if(isset($_POST['submit']))
{
	if(empty($_POST['play'])){
		echo "<script> alert('Please Select Players.');window.location='../addevent.php'</script>";

	}else{
$name=$_POST['em'];
$level=$_POST['tl'];
$date=$_POST['tm'];
$exp=$_POST['exp'];
$pl=$_POST['place'];
$playarr=$_POST['play'];
$achievement=$_POST['achievement'];
$target_dir="uploads/";
$image=$target_dir.basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"],$image);

if(!empty($playarr)){
    for($i = 0; $i < count($playarr); $i++){
        if(!empty($playarr[$i])){
            $ss1 = $playarr[$i];
            $ch[] = $ss1 . ",";
		}  
	}

  	$ch = implode(" ",$ch);
   	$ch = substr($ch, 0,-1);

	$stmt=$admin->Rcud("INSERT INTO `event`(`level`,`tournament_name`,`players`,`ev_date`,`place`,`expense`,`trophy`,`achievement`,`date`)values('".$level."','".$name."','".$ch."','".$date."','".$pl."','".$exp."','".$image."','".$achievement."',now())",'Saved');
}
echo "<script> alert('Tournament Detalis Added')</script>";
$admin->redirect1('../special.php?id='.$stmt.'&players='.$ch.'&tournament_name='.$name.'&ev_date='.$date);

}}
?>