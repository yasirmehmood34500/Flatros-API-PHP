<?php 
include "../classes/all_function.php";
include "../classes/db.php";
$sql_splash=$conn->query("SELECT text,header,image_name FROM app_splash_screen WHERE status=1");
$splash_array=array();
while ($splash=$sql_splash->fetch_assoc()) {
	$splash_array[]=$splash;
}
echo json_encode($splash_array);
 ?>
