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
                        <h4>
                            <i class="fa fa-home position-left"></i> <span>Add New Institutions</span></h4>
                    </div>


                    <ul class="breadcrumb">
                        <li><a href=""><i class="fa fa-home"></i>Home</a></li>
                        <li class="active"> Add New Institutions</li>
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
                                    </div>
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="list_school.php"><button type="submit" class="btn btn-warning col-md-12" style="margin-bottom:10px;" >View All Institutions</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body no-padding-bottom">
                                {!! Form::open( array( 'route' => array('saveinstitution') ,'role' => 'form' ,'method'=>'POST', 'files'=>true,'class'=>'form-horizontal nobottommargin') ) !!}
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Name of Insitutions</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Name of the school" name="name_of_insitutions">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Address</label>
                                        <div class="col-lg-8">
                                            <textarea type="text" class="form-control" placeholder="Address" name="address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-4">State</label>
                                        <div class="col-lg-2"><input type="text" class="form-control"  placeholder="Sate" name="state"></div>
                                        <label class="control-label col-lg-1">City/Town</label>
                                        <div class="col-lg-2"><input type="text" class="form-control" placeholder="City/Town" name="city"></div>
                                        <label class="control-label col-lg-1">Pincode</label>
                                        <div class="col-lg-2"><input type="text" class="form-control" placeholder="Pincode" name="pin"></div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-4">Phone</label>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control"  placeholder="Phone" name="phone"></div>
                                        <label class="control-label col-lg-2">Mobile</label>
                                        <div class="col-lg-3"><input type="text" class="form-control" placeholder="Mobile" name="mobile"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">E-mail</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="E-mail" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Number of Students</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Number of Students" name="number_of_students">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">User name</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="User name" name="user_name">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-4">Password</label>
                                        <div class="col-lg-3">
                                            <input type="password" class="form-control"  placeholder="Password" name="password"></div>
                                        <label class="control-label col-lg-2">Re-password</label>
                                        <div class="col-lg-3"><input type="password" class="form-control" placeholder="Re-password" name="cpassword"></div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-success" style="float:right;">Save Institutions</button>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                @include('footer')

                <!-- /footer -->
            </div>
        </div>

    </div>
</div>

</body>
</html>