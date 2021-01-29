<?php 
include "../../classes/all_function.php";
include "../../classes/db.php";
if (isset($_GET['vender_id'])) {
	$iid=$_GET['vender_id'];
$sel="SELECT brand_name,brand_logo,name,file_name,email,mobile,gender,address,ntn_no FROM vender WHERE id='$iid'";
$array=array();
$query=$conn->query($sel);
$fet=$query->fetch_assoc();

echo json_encode($fet);
} else {
	$mess1=array("response" => "vender_id required");
                          echo json_encode($mess1);
}




 ?>