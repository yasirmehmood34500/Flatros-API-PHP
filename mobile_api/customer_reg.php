<?php 
include "../classes/all_function.php";
if (isset($_POST['name'])) {
  if (isset($_POST['mobile'])) {
    if (isset($_POST['email'])) {
      if (isset($_POST['password'])) {
        
      

$data=array(
    'name' => $_POST['name'],
    'mobile' => $_POST['mobile'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'create_at' => date("Y-m-d"),
    'status' => 1,
    
    
  );
  $ch=array('email' => $_POST['email']);
  $num=$fun->row_count_con("customer",$ch);
  if ($num > 0) {
    $mess1=array("response" => "Email already used");
    echo json_encode($mess1);
  }
  else{
     $ins=$fun->insert_data("customer",$data);
    if ($ins) {
       $mobile=$_POST['mobile'];
          $email=$_POST['email'];
          $name=$_POST['name'];
      $mess1="Account Successfully Created";
      $dd=array('email' => $_POST['email'],'password' => $_POST['password']);
      $one=$fun->one_value_or("customer",$dd,"id","DESC");
      $_SESSION['customer_login']=$one['id'];

      include "../mail/PHPMailer-master/PHPMailerAutoload.php";
          
        $mail = new PHPMailer();
        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host = "mail.mayas.pk";
        $mail->SMTPOptions = array(
                          'ssl' => array(
                              'verify_peer' => false,
                              'verify_peer_name' => false,
                              'allow_self_signed' => true
                          )
                      ); 
        $mail->SMTPAuth = TRUE;
        $mail->Username = "info@mayas.pk";
        $mail->Password = "MAYASPK123";
        $mail->SMTPSecure = "false";
        $mail->Port = 2525;
        $mail->From = "info@mayas.pk";
        $mail->FromName = "MAYAS.PK";  
        $mail->addAddress($email); 
        $mail->isHTML(true); 
        $mail->Subject = "Thanks for Mayas Customer Registration ";
        $mail->Body = 'Dear '.$name.' <br>';
        $mail->Body .= 'Your Registration is Confirm <br>';
        $mail->Body .= 'Thanks for Mayas Registration <br>';
        $mail->Body .= '<img src="http://mayas.pk/assets/images/mayaslogo.svg" style="width: 300px; height: 100px;">';

        $mail->AltBody = "This is the plain text version of the email content";
                      if($mail->send()){

                          
                          $mess1=array("response" => "Email Successfully Sended");
                          echo json_encode($mess1);
                      }else{
                          $mess1=array("response" => "Email Sending faild");
                          echo json_encode($mess1);
                      }


    }
  }
  } else {
         $mess1=array("response" => "password required");
                          echo json_encode($mess1);
      }
      
    } else {
       $mess1=array("response" => "email required");
                          echo json_encode($mess1);
    }
    
  } else {
     $mess1=array("response" => "mobile required");
                          echo json_encode($mess1);
  }
  
} else {
   $mess1=array("response" => "name required");
                          echo json_encode($mess1);
}
 ?>