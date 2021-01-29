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
                                    <h4 class="card-title">Page no Wise Products API <b class="alert alert-danger">GET</b></h4>
                                    <br />
                                </div>
                                <div class="card-body p-3">
                                   <b id="get_base_url">Base URL</b>/products.php
                                   <hr>
                                   <b class="alert alert-danger">GET</b> <span class="text-navy">page_no</span> value should be in integer type <b class="text-red">1</b>
                                   <hr>
                                   <b>API Results</b>
                                   <hr>
                                   <p>
                                       [ <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"id"</span>: <span class="text-navy">"1",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"menu"</span>: <span class="text-navy">"Mobile",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"sub_category"</span>: <span class="text-navy">"6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"IPhone 6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"40000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"description"</span>: <span class="text-navy">"IPhone ^s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"headline"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"in_box"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"dimension"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_period"</span>: <span class="text-navy">"1 Year",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_policy"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"brand_name"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"discount_offer"</span>: <span class="text-navy">"130",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"file_name"</span>: <span class="text-navy">"product_img.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"weight"</span>: <span class="text-navy">"50",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_length"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_height"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_width"</span>: <span class="text-navy">"30",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          }, <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"id"</span>: <span class="text-navy">"2",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"menu"</span>: <span class="text-navy">"Mobile",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"sub_category"</span>: <span class="text-navy">"6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"IPhone 6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"40000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"description"</span>: <span class="text-navy">"IPhone ^s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"headline"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"in_box"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"dimension"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_period"</span>: <span class="text-navy">"1 Year",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_policy"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"brand_name"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"discount_offer"</span>: <span class="text-navy">"130",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"file_name"</span>: <span class="text-navy">"product_img.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"weight"</span>: <span class="text-navy">"50",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_length"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_height"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_width"</span>: <span class="text-navy">"30",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          } <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"id"</span>: <span class="text-navy">"3",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"menu"</span>: <span class="text-navy">"Mobile",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"sub_category"</span>: <span class="text-navy">"6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"IPhone 6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"40000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"description"</span>: <span class="text-navy">"IPhone ^s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"headline"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"in_box"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"dimension"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_period"</span>: <span class="text-navy">"1 Year",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_policy"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"brand_name"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"discount_offer"</span>: <span class="text-navy">"130",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"file_name"</span>: <span class="text-navy">"product_img.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"weight"</span>: <span class="text-navy">"50",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_length"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_height"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_width"</span>: <span class="text-navy">"30",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          }, <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"id"</span>: <span class="text-navy">"4",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"menu"</span>: <span class="text-navy">"Mobile",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"sub_category"</span>: <span class="text-navy">"6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"IPhone 6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"40000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"description"</span>: <span class="text-navy">"IPhone ^s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"headline"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"in_box"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"dimension"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_period"</span>: <span class="text-navy">"1 Year",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_policy"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"brand_name"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"discount_offer"</span>: <span class="text-navy">"130",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"file_name"</span>: <span class="text-navy">"product_img.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"weight"</span>: <span class="text-navy">"50",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_length"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_height"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_width"</span>: <span class="text-navy">"30",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          } <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"id"</span>: <span class="text-navy">"5",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"menu"</span>: <span class="text-navy">"Mobile",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"sub_category"</span>: <span class="text-navy">"6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"IPhone 6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"40000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"description"</span>: <span class="text-navy">"IPhone ^s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"headline"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"in_box"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"dimension"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_period"</span>: <span class="text-navy">"1 Year",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_policy"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"brand_name"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"discount_offer"</span>: <span class="text-navy">"130",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"file_name"</span>: <span class="text-navy">"product_img.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"weight"</span>: <span class="text-navy">"50",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_length"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_height"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_width"</span>: <span class="text-navy">"30",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          }, <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"id"</span>: <span class="text-navy">"6",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"menu"</span>: <span class="text-navy">"Mobile",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"sub_category"</span>: <span class="text-navy">"6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"IPhone 6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"40000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"description"</span>: <span class="text-navy">"IPhone ^s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"headline"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"in_box"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"dimension"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_period"</span>: <span class="text-navy">"1 Year",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_policy"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"brand_name"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"discount_offer"</span>: <span class="text-navy">"130",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"file_name"</span>: <span class="text-navy">"product_img.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"weight"</span>: <span class="text-navy">"50",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_length"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_height"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_width"</span>: <span class="text-navy">"30",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          } <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"id"</span>: <span class="text-navy">"7",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"menu"</span>: <span class="text-navy">"Mobile",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"sub_category"</span>: <span class="text-navy">"6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"IPhone 6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"40000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"description"</span>: <span class="text-navy">"IPhone ^s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"headline"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"in_box"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"dimension"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_period"</span>: <span class="text-navy">"1 Year",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_policy"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"brand_name"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"discount_offer"</span>: <span class="text-navy">"130",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"file_name"</span>: <span class="text-navy">"product_img.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"weight"</span>: <span class="text-navy">"50",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_length"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_height"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_width"</span>: <span class="text-navy">"30",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          }, <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"id"</span>: <span class="text-navy">"8",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"menu"</span>: <span class="text-navy">"Mobile",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"sub_category"</span>: <span class="text-navy">"6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"IPhone 6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"40000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"description"</span>: <span class="text-navy">"IPhone ^s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"headline"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"in_box"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"dimension"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_period"</span>: <span class="text-navy">"1 Year",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_policy"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"brand_name"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"discount_offer"</span>: <span class="text-navy">"130",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"file_name"</span>: <span class="text-navy">"product_img.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"weight"</span>: <span class="text-navy">"50",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_length"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_height"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_width"</span>: <span class="text-navy">"30",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          } <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"id"</span>: <span class="text-navy">"9",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"menu"</span>: <span class="text-navy">"Mobile",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"sub_category"</span>: <span class="text-navy">"6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"IPhone 6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"40000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"description"</span>: <span class="text-navy">"IPhone ^s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"headline"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"in_box"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"dimension"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_period"</span>: <span class="text-navy">"1 Year",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_policy"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"brand_name"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"discount_offer"</span>: <span class="text-navy">"130",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"file_name"</span>: <span class="text-navy">"product_img.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"weight"</span>: <span class="text-navy">"50",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_length"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_height"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_width"</span>: <span class="text-navy">"30",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          }, <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"id"</span>: <span class="text-navy">"10",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"menu"</span>: <span class="text-navy">"Mobile",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"sub_category"</span>: <span class="text-navy">"6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"IPhone 6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"40000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"description"</span>: <span class="text-navy">"IPhone ^s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"headline"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"in_box"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"dimension"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_period"</span>: <span class="text-navy">"1 Year",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_policy"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"brand_name"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"discount_offer"</span>: <span class="text-navy">"130",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"file_name"</span>: <span class="text-navy">"product_img.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"weight"</span>: <span class="text-navy">"50",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_length"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_height"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_width"</span>: <span class="text-navy">"30",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          } <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"id"</span>: <span class="text-navy">"11",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"menu"</span>: <span class="text-navy">"Mobile",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"sub_category"</span>: <span class="text-navy">"6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"IPhone 6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"40000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"description"</span>: <span class="text-navy">"IPhone ^s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"headline"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"in_box"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"dimension"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_period"</span>: <span class="text-navy">"1 Year",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_policy"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"brand_name"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"discount_offer"</span>: <span class="text-navy">"130",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"file_name"</span>: <span class="text-navy">"product_img.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"weight"</span>: <span class="text-navy">"50",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_length"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_height"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_width"</span>: <span class="text-navy">"30",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          }, <br>
                                          &nbsp;&nbsp;&nbsp;  
                                          { <br>
                                            &nbsp;&nbsp;&nbsp;  
                                            <span class="text-orange">"id"</span>: <span class="text-navy">"12",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"menu"</span>: <span class="text-navy">"Mobile",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"category"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"sub_category"</span>: <span class="text-navy">"6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"name"</span>: <span class="text-navy">"IPhone 6s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"price"</span>: <span class="text-navy">"40000",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"description"</span>: <span class="text-navy">"IPhone ^s",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"headline"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"in_box"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"dimension"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_period"</span>: <span class="text-navy">"1 Year",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"warranty_policy"</span>: <span class="text-navy">"",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"brand_name"</span>: <span class="text-navy">"IPhone",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"discount_offer"</span>: <span class="text-navy">"130",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"file_name"</span>: <span class="text-navy">"product_img.jpg",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"weight"</span>: <span class="text-navy">"50",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_length"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_height"</span>: <span class="text-navy">"30",</span> <br>
                                            &nbsp;&nbsp;&nbsp;
                                            <span class="text-orange">"product_width"</span>: <span class="text-navy">"30",</span> <br>

                                            &nbsp;&nbsp;&nbsp;
                                          } <br>
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
