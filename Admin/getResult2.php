<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

$searchq=$_GET['r'];
$data="SELECT * FROM seller WHERE sname like '".$searchq."%' or place like '".$searchq."%' ";
$val=$admin->ret($data);
echo '<div class="row">';
while($row = $val->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr>
	<td>'. $row['sname'].'</td>
	<td>'. $row['phoneno'].'</td>
	<td>'. $row['address'].'</td>
	<td>'. $row['place'].'</td>
	<td><a href="controller/deletesup.php?id='. $row['se_id'].'" class="btn btn-danger">Delete</a></td>	
	</tr>';      
}
?>
