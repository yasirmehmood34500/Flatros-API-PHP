<?php
include "../classes/all_function.php";
include "../classes/db.php";
if (isset($_GET['product_id']))
{
    $where1 = " AND id='" . $_GET['product_id'] . "'";
}
else
{
    $where1 = "";
}
if (isset($_GET['menu_id']))
{
    $where2 = " AND menu_id='" . $_GET['menu_id'] . "'";
}
else
{
    $where2 = "";
}
if (isset($_GET['category_id']))
{
    $where3 = " AND category_id='" . $_GET['c'] . "'";
}
else
{
    $where3 = "";
}
if (isset($_GET['sub_category_id']))
{
    $where4 = " AND sub_category_id='" . $_GET['sub_category_id'] . "'";
}
else
{
    $where4 = "";
}
if (isset($_GET['page_no']))
{
    $num = 8 + ($_GET['page_no'] * 4);
    $limit = " LIMIT 0," . $num;
}
else
{
    $limit = " LIMIT 0,8";
}
if (isset($_GET['from']) && isset($_GET['to'])) {
	$limit=" LIMIT ".$from.",".$to;
}
if (isset($_GET['all_product'])) {
	$limit="";
}

$sql_menu = $conn->query("SELECT id,(SELECT name FROM menu WHERE id=menu_id) AS menu, (SELECT name FROM category WHERE id=category_id) AS category,(SELECT name FROM sub_category WHERE id=sub_category_id) AS sub_category,name,price,description,headline,in_box,dimension,warranty_period,warranty_policy,brand_name,discount_offer,file_name,weight,product_length,product_height,product_width,multi_file_no FROM product WHERE status=1 " . $where1 . $where2 . $where3 . $where4 . $limit);
$menu_array = array();
while ($menu = $sql_menu->fetch_assoc())
{
	$multi_file_no=$menu['multi_file_no'];
	$mult_que=$conn->query("SELECT * FROM multi_file WHERE multi_file_no='$multi_file_no' AND status=1");
	$arr_multi=array();
	while ($fet_mutl=$mult_que->fetch_assoc()) {
		$arr_multi[]=array("id"=>$fet_mutl['id'],"file_name"=>$fet_mutl['file_name']);
	}
	$product=array(
		    "id" => $menu['id'],
            "menu" => $menu['menu'],
            "category" => $menu['category'],
            "sub_category" => $menu['sub_category'],
            "name" => $menu['name'],
            "price" => $menu['price'],
            "description" => $menu['description'],
            "headline" => $menu['headline'],
            "in_box" => $menu['in_box'],
            "dimension" => $menu['dimension'],
            "warranty_period" => $menu['warranty_period'],
            "warranty_policy" => $menu['warranty_policy'],
            "brand_name" => $menu['brand_name'],
            "discount_offer" => $menu['discount_offer'],
            "file_name" => $menu['file_name'],
            "weight" => $menu['weight'],
            "product_length" => $menu['product_length'],
            "product_height" => $menu['product_height'],
            "product_width" => $menu['weight'],
            "multi_file_no" => $menu['multi_file_no'],
            "rating"=> "4.8",
            "isFavourite" => true,
            "isPopular" => true,
            "images"=>$arr_multi
	);
    $menu_array[] = $product;
}
echo json_encode($menu_array);
?>
