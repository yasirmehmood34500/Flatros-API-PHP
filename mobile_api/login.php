<?php 
include "../classes/all_function.php";
if (isset($_POST['email'])) {
  if (isset($_POST['password'])) {
    if (isset($_POST['login_type'])) {
      $con=array('email' => $_POST['email'],'password' => $_POST['password']);
      $table=$_POST['login_type'];
      $num=$fun->row_count_con($table,$con);
      $one=$fun->one_value($table,$con);
      if ($num > 0) {
        if ($table == "customer") {
          if ($one['status'] == 1) {
           $res=array('login' => "customer", 'response' => "success");
           echo json_encode($res);
          } else {
            $res=array('login' => "customer", 'response' => "invalid");
           echo json_encode($res);
          }
        } elseif ($table == "vender") {
          $res=array('login' => "vender", 'response' => "success");
           echo json_encode($res);
        }
        elseif ($table == "rider") {
         if ($one['status'] == 1) {
           $res=array('login' => "rider", 'response' => "success");
           echo json_encode($res);
          } else {
            $res=array('login' => "rider", 'response' => "invalid");
           echo json_encode($res);
          }
        }
      }else{
        $res=array('login' => $_POST['login_type'], 'response' => "invalid");
           echo json_encode($res);
      }
    } else {
      $mess1=array("response" => "Login Type required");
                          echo json_encode($mess1);
    } 
  } else {
    $mess1=array("response" => "Password required");
                          echo json_encode($mess1);
  }
  
} else {
  $mess1=array("response" => "email required");
                          echo json_encode($mess1);
}
 ?>