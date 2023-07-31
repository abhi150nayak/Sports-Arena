<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

$searchq=$_GET['q'];
$data="SELECT * FROM event WHERE tournament_name like '".$searchq."%' or ev_date like '".$searchq."%' or level like '".$searchq."%' ";
$val=$admin->ret($data);
echo '<div class="row">';
while($row = $val->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr>
	<td>'. $row['tournament_name'].'</td>
	<td>'. $row['level'].'</td>
	<td>'. $row['ev_date'].'</td>
	<td>'. $row['place'].'</td>
	<td>'. $row['players'].'</td>
	<td>'. $row['expense'].'</td>
	<td>'. $row['achievement'].'</td>
	</tr>';     

}

?>
