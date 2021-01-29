<?php 
include "../classes/all_function.php";
include "../classes/db.php";
if (isset($_GET['city_id'])) {
	$city_id=$_GET['city_id'];
	$where=" AND city_id='$city_id'";
} else {
	$where="";
}

$sql_menu=$conn->query("SELECT id,city_id,(SELECT name FROM city WHERE id=city_id) AS city, name AS city_area  FROM city_area WHERE status=1 ".$where);
$menu_array=array();
while ($menu=$sql_menu->fetch_assoc()) {
	$menu_array[]=$menu;
}
echo json_encode($menu_array);
 ?>
