<?php 
include "../../classes/all_function.php";
include "../../classes/db.php";
if (isset($_GET['order_no'])) {
	
$order_no=$_GET['order_no'];
$sel="SELECT a.product_id, a.vender_id, a.qty, a.price, a.after_mayas_price, a.order_no, (SELECT name FROM product WHERE id=a.product_id) AS product_name, (SELECT file_name FROM multi_file WHERE multi_file_no=(SELECT multi_file_no FROM product WHERE id=a.product_id) LIMIT 1) AS product_file_name  FROM add_to_cart a WHERE order_no='$order_no' AND status > 1";
$array=array();
$query=$conn->query($sel);
while ($fet=$query->fetch_assoc()) {
	$array[]=$fet;
}

echo json_encode($array);
} else {
	$mess1=array("response" => "order_no required");
                          echo json_encode($mess1);
}



 ?>