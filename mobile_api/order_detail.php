<?php 
include "../classes/all_function.php";
include "../classes/db.php";
if (isset($_GET['order_no'])) {
	$c_id=$_GET['order_no'];
	$sql_menu=$conn->query("SELECT order_no,(SELECT name FROM product WHERE id=a.product_id) AS product_title,(SELECT file_name FROM product WHERE id=a.product_id) AS img, a.price,a.qty,a.track_number,a.slip_link, (SELECT detail_customer FROM add_to_cart_status_detail WHERE value=a.status) AS status FROM add_to_cart AS a WHERE a.order_no='$c_id'");
	$menu_array=array();
	while ($menu=$sql_menu->fetch_assoc()) {
		$menu_array[]=$menu;
	}
	echo json_encode($menu_array);
} else {
	echo json_encode(array('response' => "order_no required"));
}
 ?>
