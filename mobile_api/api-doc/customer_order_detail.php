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
                                    <h4 class="card-title">Customer Order Detail API <b class="alert alert-danger">GET</b></h4>
                                    <br />
                                </div>
                                <div class="card-body p-3">
                                   <b id="get_base_url">Base URL</b>/order_detail.php
                                   <hr>
                                    <b class="alert alert-danger">GET</b> <span class="text-red">order_no</span> value should be in integer type <b class="text-red">1</b>
                                   <hr>
                                   <b>API Results</b>                                   
                                   <hr>
                                   <p>
                                       { <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          <span class="text-orange">"response"</span>: <span class="text-navy">"order_no required"</span> <br>
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
                                            <span class="text-orange">"product_title"</span>: <span class="text-navy">"IPhone 6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"img"</span>: <span class="text-navy">"product_img.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"40000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"qty"</span>: <span class="text-navy">"1",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"track_number"</span>: <span class="text-navy">"1234567890",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"slip_link"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"status"</span>: <span class="text-navy">"Delivery Complete",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          }, <br>
                                          &nbsp;&nbsp;&nbsp;
                                          { <br>
                                           &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"order_no"</span>: <span class="text-navy">"1234567890",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_title"</span>: <span class="text-navy">"IPhone 6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"img"</span>: <span class="text-navy">"product_img.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"40000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"qty"</span>: <span class="text-navy">"1",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"track_number"</span>: <span class="text-navy">"1234567890",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"slip_link"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"status"</span>: <span class="text-navy">"Accept",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          }, <br>
                                        ]
                                   </p>
                                   <b class="text-red">Product Image Path</b>
                                   <span class="text-navy">http://hitcarts/upload/multi_product/product_img.jpg</span>
                                   
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
