<?php 
include "../classes/all_function.php";
include "../classes/db.php";
// city api
if (isset($_GET['state_id'])) {
	$state_id=$_GET['state_id'];
	$where=" AND state_id='$state_id'";
} else {
	$where="";
}

$sql_menu=$conn->query("SELECT id,state_id,(SELECT name FROM state WHERE id=state_id) AS state, name AS city  FROM city WHERE status=1 ".$where);
$menu_array=array();
while ($menu=$sql_menu->fetch_assoc()) {
	$menu_array[]=$menu;
}
echo json_encode($menu_array);
 ?>
