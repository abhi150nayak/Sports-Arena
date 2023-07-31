<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

$searchq=$_GET['r'];
$data="SELECT * FROM staff WHERE name like '".$searchq."%' or place like '".$searchq."%' ";
$val=$admin->ret($data);
echo '<div class="row">';
while($row = $val->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr>
	<td>'. $row['name'].'</td>
	<td>'. $row['designation'].'</td>
	<td>'. $row['email'].'</td>
	<td>'. $row['phone'].'</td>
	<td>'. $row['address'].'</td>
	<td>'. $row['place'].'</td>
	<td><a href="controller/deletemng.php?id='. $row['mid'].'" class="btn btn-danger">Delete</a></td>
	</tr>';     
}
?>
