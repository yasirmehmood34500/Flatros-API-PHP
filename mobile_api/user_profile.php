<?php 
include "../classes/all_function.php";
include "../classes/db.php";
if (isset($_GET['customer_id'])) {
	$c_id=$_GET['customer_id'];
	$sql_menu=$conn->query("SELECT name, mobile, profile_name, email, address, (SELECT name FROM city WHERE id=city_id) AS city, (SELECT name FROM city_area WHERE id=city_area_id) AS city_area FROM customer WHERE status=1 AND id='$c_id'");
	
	$menu=$sql_menu->fetch_assoc();
	echo json_encode($menu);
} else {
	echo json_encode(array('response' => "customer_id required"));
}
 ?>
