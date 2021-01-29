<?php 
include "../classes/all_function.php";
include "../classes/db.php";
if (isset($_GET['customer_id'])) {
	$c_id=$_GET['customer_id'];
	$sql_menu=$conn->query("SELECT order_no,email,name,address,mobile,(SELECT name FROM state WHERE id=state_id) AS state, (SELECT name FROM city WHERE id=city_id) AS city,town,zip,total_price,shipping_charges FROM order_now WHERE user_id='$c_id'");
	$menu_array=array();
	while ($menu=$sql_menu->fetch_assoc()) {
		$menu_array[]=$menu;
	}
	echo json_encode($menu_array);
} else {
	echo json_encode(array('response' => "customer_id required"));
}
 ?>
