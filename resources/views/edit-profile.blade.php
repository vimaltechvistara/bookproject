<?php
$menu_db="";
$menu_bk="";
$menu_cl="";
$menu_su="";
$menu_in="";
$menu_ib="";
$menu_st="active";
$menu_no="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PORTRAIT</title>
    <link href="assets/images/favicon.ico" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="assets/images/favicon.ico" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="assets/images/favicon.ico" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="assets/images/favicon.ico" rel="apple-touch-icon" type="image/png">
    <link href="assets/images/favicon.ico" rel="icon" type="image/png">
    <link href="assets/images/favicon.ico" rel="shortcut icon">

    <!-- Global stylesheets -->
    <link href="fonts/fonts.css" rel="stylesheet" type="text/css">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-extended.css" rel="stylesheet" type="text/css">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/color-system.css" rel="stylesheet" type="text/css">
    <link href="css/media.css" rel="stylesheet" type="text/css">
    <link href="assets/weather/weather-icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/weather/weather-icons-wind.min.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="index.htm" id="style">
    <link type="text/css" rel="stylesheet" href="index.htm" id="theme">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fancybox.min.js"></script>
    <script src="js/app.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script src="js/maps/jvectormap/jvectormap.min.js"></script>
    <script src="js/maps/jvectormap/map_files/world.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/maps/google/markers/symbols_custom.js"></script>
</head>
<body>


<!-- Main navbar -->
@include('header')
<!-- /main navbar -->

<!-- Page container -->
<div class="page-container" style="min-height:700px">

    <!-- Page content -->
    <div class="page-content"><!-- Main sidebar -->
        @include('sidebar')
        <!-- /main sidebar -->
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Page header -->
            <div class="page-header">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4>
                            <i class="fa fa-home position-left"></i> <span>Profile Update</span></h4>
                    </div>
                    <ul class="breadcrumb">
                        <li><a href=""><i class="fa fa-home"></i>Home</a></li>
                        <li class="active">Profile Update</li>
                    </ul>
                </div>
            </div>

            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4 class="panel-title">
                                            Change Profile
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body no-padding-bottom">
                                <form class="form-horizontal" action="form_basic.htm#">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Name of the Institute</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Address</label>
                                        <div class="col-lg-8">
                                            <textarea type="text" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">
                                            State</label>
                                        <div class="col-lg-8">
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">SELECT-STATE
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">ASSAM</a></li>
                                                    <li><a href="#">INDIA</a></li>
                                                    <li><a href="#">KASHMIR</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">
                                            State</label>
                                        <div class="col-lg-8">
                                            <div class="dropdown">
                                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">SELECT-COUNTRY
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">ASSAM</a></li>
                                                    <li><a href="#">INDIA</a></li>
                                                    <li><a href="#">KASHMIR</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Pincode</label>
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-4">Mobile Number</label>
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control"></div>
                                        <label class="control-label col-lg-4">Phone Number</label>
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control" ></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Number of Students</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">User Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-4">Password</label>
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control"></div>
                                        <label class="control-label col-lg-4">Re-Password</label>
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control" ></div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-4">Subscription Period</label>
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control"></div>
                                        <label class="control-label col-lg-4">Subscription on</label>
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control" ></div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-success" style="float:right;">Save Profile</button>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>

                    </div>
                </div>

                <script type='text/javascript'>
                    $(document).ready(function() {
                        $(function() {
                            // Default file input style
                            $(".file-styled").uniform({
                                fileButtonHtml: 'Browse'
                            });

                            // Default file input style with icon
                            $(".file-styled-icon").uniform({
                                fileButtonHtml: '<i class="fa fa-plus"></i>'
                            });

                            // Primary file input
                            $(".file-styled-primary").uniform({
                                wrapperClass: 'bg-primary',
                                fileButtonHtml: 'Browse'
                            });

                            // Primary file input
                            $(".file-styled-primary-icon").uniform({
                                wrapperClass: 'bg-primary',
                                fileButtonHtml: '<i class="fa fa-plus"></i>'
                            });
                        });
                    });
                </script>
                <!-- Footer -->
              @include('footer')
                <!-- /footer -->
            </div>
        </div>

    </div>
</div>

</body>
</html>