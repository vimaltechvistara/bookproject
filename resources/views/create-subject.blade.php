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
                            <i class="fa fa-home position-left"></i> <span>Add New Subject</span></h4>
                    </div>


                    <ul class="breadcrumb">
                        <li><a href=""><i class="fa fa-home"></i>Home</a></li>
                        <li class="active">Add New Subject</li>
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
                                        <a href="{{URL::to('/')}}/subjectlists"><button type="submit" class="btn btn-warning col-md-12" style="margin-bottom:10px;" >View All Subject</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body no-padding-bottom">
                                {!! Form::open( array( 'route' => array('savesubject') ,'role' => 'form' ,'method'=>'POST', 'files'=>true,'class'=>'form-horizontal nobottommargin') ) !!}
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Subject</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Subject" name="subject_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-success" style="float:right;">Save Subject</button>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
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