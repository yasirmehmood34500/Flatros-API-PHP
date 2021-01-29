<?php 
session_start();
if (!isset($_SESSION['api_doc_login'])) {
	header("Location: index.php");
}
 ?>