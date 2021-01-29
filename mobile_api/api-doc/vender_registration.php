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
                                    <h4 class="card-title">Vender Registration API <b class="alert alert-primary">POST</b></h4>
                                    <br />
                                </div>
                                <div class="card-body p-3">
                                   <b id="get_base_url">Base URL</b>/customer_reg.php
                                   <hr>
                                   <b class="alert alert-primary">POST</b> <span class="text-red">brand_name</span>
                                   <hr>
                                   <b class="alert alert-primary">POST</b> <span class="text-red">mobile</span>
                                   <hr>
                                   <b class="alert alert-primary">POST</b> <span class="text-red">new_password</span>
                                   <hr>
                                   <b class="alert alert-primary">POST</b> <span class="text-red">conf_password</span>
                                   <hr>
                                   <b class="alert alert-primary">POST</b> <span class="text-red">city_id</span> value should be integer type <b class="text-red">1</b>
                                   <hr>
                                   <b class="alert alert-primary">POST</b> <span class="text-red">address</span>
                                   <hr>
                                   <b>API Results</b>
                                   <hr>
                                   <p>
                                       { <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          <span class="text-orange">"response"</span>: <span class="text-navy">"email required"</span> <br>
                                        }
                                   </p>
                                   <hr>
                                   <p>
                                       { <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          <span class="text-orange">"response"</span>: <span class="text-navy">"password required"</span> <br>
                                        }
                                   </p>
                                   <hr>
                                   <p>
                                       { <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          <span class="text-orange">"response"</span>: <span class="text-navy">"mobile required"</span> <br>
                                        }
                                   </p>
                                   <hr>
                                   <p>
                                       { <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          <span class="text-orange">"response"</span>: <span class="text-navy">"brand_name required"</span> <br>
                                        }
                                   </p>
                                   <hr>
                                   <p>
                                       { <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          <span class="text-orange">"response"</span>: <span class="text-navy">"address required"</span> <br>
                                        }
                                   </p>
                                   <hr>
                                   <p>
                                       { <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          <span class="text-orange">"response"</span>: <span class="text-navy">"city_id required"</span> <br>
                                        }
                                   </p>
                                   <hr>
                                   <p>
                                       { <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          <span class="text-orange">"response"</span>: <span class="text-navy">"both password different"</span> <br>
                                        }
                                   </p>
                                   <hr>
                                   <p>
                                       { <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          <span class="text-orange">"response"</span>: <span class="text-navy">"Email Sending faild"</span> <br>
                                        }
                                   </p>                                   
                                   <hr>
                                   <p>
                                       { <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          <span class="text-orange">"response"</span>: <span class="text-navy">"Email already used"</span> <br>
                                        }
                                   </p>
                                   <hr>
                                   <p>
                                       { <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          <span class="text-orange">"response"</span>: <span class="text-navy">"Email Successfully Sended"</span> <br>
                                        }
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
