<?php 
include "../classes/all_function.php";
if (isset($_POST['mobile'])) {
  if (isset($_POST['new_password'])) {
    if (isset($_POST['address'])) {
      if (isset($_POST['brand_name'])) {
        if (isset($_POST['email'])) {
          if (isset($_POST['city_id'])) {
             if ($_POST['new_password'] == $_POST['conf_password']) {
                  $data=array(
                  'brand_name' => $_POST['brand_name'],
                  'mobile' => $_POST['mobile'],
                  'city_id' => $_POST['city_id'],
                  'address' => $_POST['address'],
                  'email' => $_POST['email'],
                  'password' => $_POST['new_password'],
                  'status' => 2,
                  'create_at' => date("Y-m-d")
                );
                $ch=array('email' => $_POST['email']);
                $num=$fun->row_count_con("vender",$ch);
                if ($num > 0) {
                 $mess1=array("response" => "Email already used");
                 echo json_encode($mess1);
                }
                else{
                   $ins=$fun->insert_data("vender",$data);
                  if ($ins) {
                    $mobile=$_POST['mobile'];
                    $email=$_POST['email'];
                    $brand_name =$_POST['brand_name'];         
                    $mess="Account Successfully Created";
                    $dd=array('email' => $_POST['email'],'password' => $_POST['new_password']);
                    $one=$fun->one_value_or("vender",$dd,"id","DESC");
                    $_SESSION['vender_login']=$one['id'];
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
                  $mail->Subject = "Thanks for Mayas Vender Registration ";
                  $mail->Body = 'Dear sir/Mam <br>';
                  $mail->Body .= 'Your Registration is Pending <br>';
                  $mail->Body .= 'Thanks for Mayas Registration <br>';
                  $mail->Body .= 'Your Store Name '.$brand_name.'<br>';
                  $mail->Body .= '<img src="http://mayas.pk/assets/images/mayaslogo.svg" style="width: 300px; height: 100px;">';

                  $mail->AltBody = "This is the plain text version of the email content";
                                if($mail->send()){

                                   $mess1=array("response" => "Email  Successfully Sended");
                                     echo json_encode($mess1);

                                }else{
                                    $mess1=array("response" => "Email Sending faild");
                                    echo json_encode($mess1);
                                }
                  }
                }
            }else{
             $mess1=array("response" => "both password different");
              echo json_encode($mess1);
            }
          } else {
             $mess1=array("response" => "city_id required");
            echo json_encode($mess1);
          }
          
        } else {
          $mess1=array("response" => "email required");
          echo json_encode($mess1);
        }
        
      } else {
        $mess1=array("response" => "brand_name required");
        echo json_encode($mess1);
      }
      
    } else {
      $mess1=array("response" => "address required");
      echo json_encode($mess1);
    }
    
  } else {
    $mess1=array("response" => "password required");
    echo json_encode($mess1);
  }
  
}else{
  $mess1=array("response" => "mobile required");
    echo json_encode($mess1);
}
 ?>