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
                                    <h4 class="card-title">Customer Orders API <b class="alert alert-danger">GET</b></h4>
                                    <br />
                                </div>
                                <div class="card-body p-3">
                                   <b id="get_base_url">Base URL</b>/user_order.php
                                   <hr>
                                    <b class="alert alert-danger">GET</b> <span class="text-red">customer_id</span> value should be in integer type <b class="text-red">1</b>
                                   <hr>
                                   <b>API Results</b>                                   
                                   <hr>
                                   <p>
                                       { <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          <span class="text-orange">"response"</span>: <span class="text-navy">"customer_id required"</span> <br>
                                        }
                                   </p>
                                   <hr>
                                   <p>
                                       [ <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"order_no"</span>: <span class="text-navy">"1234567890",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"email"</span>: <span class="text-navy">"yasir@hitcarts.com",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"Yasir",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"address"</span>: <span class="text-navy">"Faisalabad",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"mobile"</span>: <span class="text-navy">"+92 301 7198 621",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"state"</span>: <span class="text-navy">"Punjab",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"city"</span>: <span class="text-navy">"Faisalabad",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"town"</span>: <span class="text-navy">"GM Abad",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"zip"</span>: <span class="text-navy">"38000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"total_price"</span>: <span class="text-navy">"3500",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"shipping_charges"</span>: <span class="text-navy">"130",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          }, <br>
                                          &nbsp;&nbsp;&nbsp;
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"order_no"</span>: <span class="text-navy">"0123456789",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"email"</span>: <span class="text-navy">"yasir@hitcarts.com",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"Yasir",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"address"</span>: <span class="text-navy">"Faisalabad",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"mobile"</span>: <span class="text-navy">"+92 301 7198 621",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"state"</span>: <span class="text-navy">"Punjab",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"city"</span>: <span class="text-navy">"Faisalabad",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"town"</span>: <span class="text-navy">"GM Abad",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"zip"</span>: <span class="text-navy">"38000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"total_price"</span>: <span class="text-navy">"1300",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"shipping_charges"</span>: <span class="text-navy">"70",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          }, <br>
                                        ]
                                   </p>
                                   
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
