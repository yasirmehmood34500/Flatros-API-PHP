<?php include "inc/programming.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "inc/css_link.php" ?>
    </head>

    <body>
    <div class="wrapper">
        <div class="sidebar" data-color="orange">
            <div class="sidebar-wrapper">
                <?php include "inc/left_side.php" ?>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg ">
                <?php include "inc/top_bar.php" ?>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card table-big-boy">
                                <div class="card-header ">
                                    <h4 class="card-title">Vender Profile API <b class="alert alert-danger">GET</b></h4>
                                    <br />
                                </div>
                                <div class="card-body p-3">
                                   <b id="get_base_url">Base URL</b>/vender/profile.php
                                   <hr>
                                    <b class="alert alert-danger">GET</b> <span class="text-red">vender_id</span> value should be in integer type <b class="text-red">1</b>
                                   <hr>
                                   <b>API Results</b>                                   
                                   <hr>
                                   <p>
                                       { <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          <span class="text-orange">"response"</span>: <span class="text-navy">"vender_id required"</span> <br>
                                        }
                                   </p>
                                   <hr>
                                   <p>  
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"brand_name"</span>: <span class="text-navy">"HitCarts",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"brand_logo"</span>: <span class="text-navy">"logo.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"HITCARTS",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"file_name"</span>: <span class="text-navy">"profile.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"email"</span>: <span class="text-navy">"developer@hitcarts.com",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"mobile"</span>: <span class="text-navy">"+92 301 7198 621",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"gender"</span>: <span class="text-navy">"Male",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"ntn_no"</span>: <span class="text-navy">"1020",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"address"</span>: <span class="text-navy">"Faisalabad"</span> <br>


                                          }
                                   </p>
                                   <b class="text-red">Profile Path</b>
                                   <span class="text-navy">http://hitcarts/upload/vender_profile/profile.jpg</span>
                                   <br>
                                   <b class="text-red">Brand Logo Path</b>
                                   <span class="text-navy">http://hitcarts/upload/vender_brand_logo/logo.jpg</span>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-plugin">
        <?php include "inc/left_side_setting.php" ?>
    </div>
</body>
<?php include "inc/js_link.php" ?>
</html>
