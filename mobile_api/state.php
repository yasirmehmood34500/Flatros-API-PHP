<?php 
include "../classes/all_function.php";
include "../classes/db.php";
$sql_menu=$conn->query("SELECT * FROM state WHERE status=1");
$menu_array=array();
while ($menu=$sql_menu->fetch_assoc()) {
	$menu=array('id' => $menu['id'],'state' => $menu['name']);
	$menu_array[]=$menu;
}
echo json_encode($menu_array);
 ?>
