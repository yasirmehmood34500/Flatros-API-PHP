 <?php 
 // class dbClass {protected $conn; function __construct() {$this->conn=new mysqli("mysql-19382-0.cloudclusters.net","flatros_api_php_user","@Flatros12345","flatros_api_php"); } } $obj =new dbClass(); 
 class dbClass {protected $conn; function __construct() {$this->conn=new mysqli("localhost","root","","flatros"); } } $obj =new dbClass(); 

 ?>

