<?php 
include "../classes/all_function.php";
include "../classes/db.php";
if (isset($_GET['product_id'])) { $where1=" AND id='".$_GET['product_id']."'"; } else { $where1=""; }
if (isset($_GET['menu_id'])) { $where2=" AND menu_id='".$_GET['menu_id']."'"; } else { $where2=""; }
if (isset($_GET['category_id'])) { $where3=" AND category_id='".$_GET['c']."'"; } else { $where3=""; }
if (isset($_GET['sub_category_id'])) { $where4=" AND sub_category_id='".$_GET['sub_category_id']."'"; } else { $where4=""; }
if (isset($_GET['page_no'])) { $num=8+($_GET['page_no']*4);	$limit=" LIMIT 0,".$num; } else { $limit=" LIMIT 0,8"; }
$sql_menu=$conn->query("SELECT id,(SELECT name FROM menu WHERE id=menu_id) AS menu, (SELECT name FROM category WHERE id=category_id) AS category,(SELECT name FROM sub_category WHERE id=sub_category_id) AS sub_category,name,price,description,headline,in_box,dimension,warranty_period,warranty_policy,brand_name,discount_offer,file_name,weight,product_length,product_height,product_width FROM product WHERE status=1 ".$where1.$where2.$where3.$where4.$limit);
$menu_array=array(); while ($menu=$sql_menu->fetch_assoc()) { $menu_array[]=$menu; }
echo json_encode($menu_array);
 ?>
