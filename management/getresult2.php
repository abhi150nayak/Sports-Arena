<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();

$searchq=$_GET['q'];
$astmt=$admin->ret("SELECT * FROM `seller`");
while($arow=$astmt->fetch(PDO::FETCH_ASSOC)):
$d_arr[$arow['se_id']]=$arow['sname'];
endwhile;
$data="SELECT * FROM item WHERE iname like '".$searchq."%' ORDER BY `sl_id` ";
$val=$admin->ret($data);
echo '<div class="row">';
while($row = $val->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr>
	<td>'. $d_arr[$row['sl_id']].'</td>
	<td>'. $row['iname'].'</td>
	<td>'. $row['amt'].'</td>
	</tr>';   
}
?>
