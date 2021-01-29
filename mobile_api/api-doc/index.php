<?php
session_start();
if(isset($_SESSION['api_doc_login'])){
    header("Location: dashboard.php");
}
$error="";
if (isset($_POST['login_btn'])) {
    if ($_POST['username'] == "yasir" && $_POST['password'] == "123") {
        $_SESSION['api_doc_login']="Yasir Mehmood";
        header("Location: dashboard.php");
    }else{
        $error="Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "inc/css_link.php" ?>
    </head>
    <body>
    <div class="wrapper wrapper-full-page">
        <div class="full-page  section-image" data-color="orange" >
           
            <div class="content">
                <div class="container">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <form class="form" method="post" action="">
                            <div class="card card-login card-hidden">
                                <div class="card-header ">
                                    <h3 class="header text-center">API Document Login</h3>
                                    <?php
                                                if($error!="") {
                                                    ?>
                                                    <div class="alert alert-warning alert-dismissable">
                                                        <button type="button" class="close" data-dismiss="alert">
                                                            &times;
                                                        </button>
                                                        <?php
                                                        echo $error;
                                                        ?>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                </div>
                                <div class="card-body ">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" placeholder="Enter Username" required="" name="username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" placeholder="Password" required="" name="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" name="login_btn" class="btn btn-warning btn-wd">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
   
</body>
<?php include "inc/js_link.php" ?>
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();
        setTimeout(function() {
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>


</html>
