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
                                    <h4 class="card-title">API Documentation</h4>
                                    <p class="card-category">Mobile App API</p>
                                    <br />
                                </div>
                                <div class="card-body p-3">
                                   <ul style="list-style: none;">
                                    <li style="color: white; padding: 10px; border-radius: 5px; font-weight: bold; background-color: orange;">For Products</li>
                                       <li><span class="fa fa-link"></span><a href="single_product.php"> Single Product API</a></li>
                                       <li><span class="fa fa-link"></span><a href="1_to_8_product.php"> 1 to 8 Products API</a></li>
                                       <li><span class="fa fa-link"></span><a href="page_no_product.php"> Page no Wise Products API</a></li>
                                       <li><span class="fa fa-link"></span><a href="menu_product.php"> Menu Wise Products API</a></li>
                                       <li><span class="fa fa-link"></span><a href="category_product.php"> Category Wise Products API</a></li>
                                       <li><span class="fa fa-link"></span><a href="sub_category_product.php"> Sub Category Wise Products API</a></li>
                                       <li><span class="fa fa-link"></span><a href="multi_selection_product.php"> Menu, Category, Sub Category & Page no Wise Products API</a></li>
                                       <hr>
                                        <li style="color: white; padding: 10px; border-radius: 5px; font-weight: bold; background-color: orange;">For Deal</li>
                                       <li><span class="fa fa-link"></span><a href="deals.php"> Deal API</a></li>
                                       <hr>
                                       <li style="color: white; padding: 10px; border-radius: 5px; font-weight: bold; background-color: orange;">For Menu</li>
                                       <li><span class="fa fa-link"></span><a href="menus.php"> Menu API</a></li>
                                       <hr>
                                       <li style="color: white; padding: 10px; border-radius: 5px; font-weight: bold; background-color: orange;">For State, City & City Area</li>
                                       <li><span class="fa fa-link"></span><a href="state.php"> State API</a></li>
                                       <li><span class="fa fa-link"></span><a href="city.php"> City API</a></li>
                                       <li><span class="fa fa-link"></span><a href="city_area.php"> City Area API</a></li>
                                       <hr>
                                       <li style="color: white; padding: 10px; border-radius: 5px; font-weight: bold; background-color: orange;">For Customer</li>
                                       <li><span class="fa fa-link"></span><a href="customer_login.php"> Customer Login API</a></li>
                                       <li><span class="fa fa-link"></span><a href="customer_registration.php"> Customer Registration API</a></li>
                                        <li><span class="fa fa-link"></span><a href="customer_profile.php"> Customer Profile API</a></li>
                                       <li><span class="fa fa-link"></span><a href="customer_order.php"> Customer Orders API</a></li>
                                       <li><span class="fa fa-link"></span><a href="customer_order_detail.php"> Customer Order Detail API</a></li>
                                       <hr>
                                       <li style="color: white; padding: 10px; border-radius: 5px; font-weight: bold; background-color: orange;">For Vender</li>
                                       <li><span class="fa fa-link"></span><a href="vender_login.php"> Vender Login API</a></li>
                                       <li><span class="fa fa-link"></span><a href="vender_registration.php"> Vender Registration API</a></li>
                                       <li><span class="fa fa-link"></span><a href="vender_product.php"> Vender Products API</a></li>
                                       <li><span class="fa fa-link"></span><a href="vender_complete_order.php"> Vender Complete Order API</a></li>
                                       <li><span class="fa fa-link"></span><a href="vender_new_order.php"> Vender New Order API</a></li>
                                       <li><span class="fa fa-link"></span><a href="vender_order_detail.php"> Order Detail API</a></li>
                                       <li><span class="fa fa-link"></span><a href="vender_payment_status.php"> Vender Payment Status API</a></li>
                                       <li><span class="fa fa-link"></span><a href="vender_profile.php"> Vender Profile API</a></li>
                                       <li><span class="fa fa-link"></span><a href="vender_sent_to_order.php"> Vender Sent to HitCarts API</a></li>
                                       <hr>
                                      
                                   </ul>
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
