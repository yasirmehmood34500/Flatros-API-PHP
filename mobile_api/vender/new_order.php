<?php 
include "../../classes/all_function.php";
include "../../classes/db.php";
if (isset($_GET['vender_id'])) {
	
$iid=$_GET['vender_id'];
$f=2;
$t=3;
$sel="SELECT a.order_no, (SELECT SUM(price) FROM add_to_cart WHERE order_no=a.order_no) AS total_price, (SELECT create_at FROM order_now WHERE order_no=a.order_no)  AS order_date FROM add_to_cart a WHERE a.vender_id='$iid' AND a.status BETWEEN '$f' AND '$t' GROUP BY order_no";
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