<?php 
include "../classes/all_function.php";
include "../classes/db.php";
$sql_menu=$conn->query("SELECT id,name FROM menu WHERE status=1");
$menu_array=array();
while ($menu=$sql_menu->fetch_assoc()) {
	$m_id=$menu['id'];
	$sql_cate=$conn->query("SELECT id,name FROM category WHERE status=1 AND menu_id='$m_id'");
	$cate_array=array();
	while ($cate=$sql_cate->fetch_assoc()) {
		$c_id=$cate['id'];
		$sql_sub_cate=$conn->query("SELECT id,name FROM sub_category WHERE status=1 AND category_id='$c_id'");
		$sub_cate_array=array();
		while ($sub_cate=$sql_sub_cate->fetch_assoc()) {
			$sub_cate_array[]=$sub_cate;
		}
		$cate=array('id' => $cate['id'], 'name' => $cate['name'], 'sub_category' => $sub_cate_array);
		$cate_array[]=$cate;
	}
	$menu=array('id' => $menu['id'],'name' => $menu['name'],'category' => $cate_array);
	$menu_array[]=$menu;
}
echo json_encode(array('menu' => $menu_array)); 
 ?>
