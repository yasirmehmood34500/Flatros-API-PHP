<?php 
include "../../classes/all_function.php";
include "../../classes/db.php";
if (isset($_GET['vender_id'])) {
	$iid=$_GET['vender_id'];
$sel="SELECT p.menu_id, p.category_id, p.multi_file_no, p.create_at, p.name, p.price, (SELECT name FROM menu WHERE id=p.menu_id) AS menu_name, (SELECT name FROM category WHERE id=p.category_id) AS category_name, (SELECT file_name FROM multi_file WHERE multi_file_no=p.multi_file_no LIMIT 1) AS product_file_name FROM product p WHERE status=1 AND vender_id='$iid'";
$array=array();
$query=$conn->query($sel);
while ($fet=$query->fetch_assoc()) {
	$array[]=$fet;
}

echo json_encode($array);
} else {
	$mess1=array("response" => "vender_id required");
                          echo json_encode($mess1);
}




 ?>