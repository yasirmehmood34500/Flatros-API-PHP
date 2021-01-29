<?php 
include "../../classes/all_function.php";
include "../../classes/db.php";
if (isset($_GET['vender_id'])) {
	
$iid=$_GET['vender_id'];
$sel1="SELECT SUM(withdraw_amount) AS succfull_balance FROM withdraw_request WHERE status=2 AND vender_id='$iid'";
$array1=array();
$query1=$conn->query($sel1);
while ($fet1=$query1->fetch_assoc()) {
	$array1[]=$fet1;
}

$sel2="SELECT SUM(withdraw_amount) AS withdraw_request FROM withdraw_request WHERE status=1 AND vender_id='$iid'";
$array2=array();
$query2=$conn->query($sel2);
while ($fet2=$query2->fetch_assoc()) {
	$array2[]=$fet2;
}


$sel3="SELECT SUM(after_mayas_price) AS current_balance FROM add_to_cart WHERE status=6 AND vender_id='$iid'";
$array3=array();
$query3=$conn->query($sel3);
while ($fet3=$query3->fetch_assoc()) {
	$array3[]=$fet3;
}

$f=0;
$t=5;
$sel4="SELECT SUM(after_mayas_price) AS pending_balance FROM add_to_cart WHERE status BETWEEN '$f' AND '$t' AND vender_id='$iid'";
$array4=array();
$query4=$conn->query($sel4);
while ($fet4=$query4->fetch_assoc()) {
	$array4[]=$fet4;
}

// echo json_encode($array1);
// echo json_encode($array2);
// echo json_encode($array3);
// echo json_encode($array4);

$full_array=array_merge($array1,$array2,$array3,$array4);
echo json_encode($full_array);
} else {
	$mess1=array("response" => "vender_id required");
                          echo json_encode($mess1);
}


 ?>