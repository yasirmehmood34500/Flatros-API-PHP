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
                                    <h4 class="card-title">Vender Products API <b class="alert alert-danger">GET</b></h4>
                                    <br />
                                </div>
                                <div class="card-body p-3">
                                   <b id="get_base_url">Base URL</b>/vender/all_product.php
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
                                       [ <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"menu_id"</span>: <span class="text-navy">"1",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category_id"</span>: <span class="text-navy">"1",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"multi_file_no"</span>: <span class="text-navy">"1234567890",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"create_at"</span>: <span class="text-navy">"2020-01-01",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"IPhone 6S",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"40000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"menu_name"</span>: <span class="text-navy">"Mobile",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category_name"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_file_name"</span>: <span class="text-navy">"product_img.jpg",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          }, <br>
                                          &nbsp;&nbsp;&nbsp;
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"menu_id"</span>: <span class="text-navy">"1",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category_id"</span>: <span class="text-navy">"1",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"multi_file_no"</span>: <span class="text-navy">"0123456789",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"create_at"</span>: <span class="text-navy">"2020-01-01",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"IPhone 5S",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"30000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"menu_name"</span>: <span class="text-navy">"Mobile",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category_name"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_file_name"</span>: <span class="text-navy">"product_img.jpg",</span> <br>

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
