<?php
$menu_in="";
$menu_first="";
$menu_second="";
$menu_third="";
$menu_four="";
$menu_five="";
$menu_six="";
$menu_seven="";
$menu_eight="";
$menu_nine="";
$menu_ten="";
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
                        <h4><i class="fa fa-home position-left"></i> <span>Dashboard</span></h4>
                    </div>
                    <ul class="breadcrumb">
                        <li><a href=""><i class="fa fa-home"></i>Home</a></li>
                        <li class="active">Dashboard</li>
                    </ul>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">


                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="panel panel-flat bg-indigo">
                            <div class="panel-heading heading-condensed">
                                <h6 class="panel-title text-uppercase pl-10">STATISTIC OF BOOKS</h6>
                            </div>
                            <div class="p-10">
                                <div class="chart" id="google-area"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="panel panel-flat bg-pink">
                            <div class="panel-heading heading-condensed">
                                <h6 class="panel-title text-uppercase pl-10">SCHOOLS</h6>
                            </div>
                            <div class="p-10">
                                <div class="chart" id="google-area-intervals"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="panel panel-flat bg-purple">
                            <div class="panel-heading heading-condensed">
                                <h6 class="panel-title text-uppercase pl-10">STUDENTS</h6>
                            </div>
                            <div class="p-10">
                                <div class="chart" id="google-column"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('footer')
            </div>
        </div>
    </div>
</div>
</body>
</html>