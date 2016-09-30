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
$menu_nine="active";
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
                            <i class="fa fa-home position-left"></i> <span>List of Publisher</span></h4>
                    </div>
                    <ul class="breadcrumb">
                        <li><a href=""><i class="fa fa-home"></i>Home</a></li>
                        <li class="active">List of Publisher</li>
                    </ul>
                </div>
            </div>

            <div class="content">

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="">Institution Name </a></li>
                                            <li><a href="">Number Students</a></li>
                                            <li><a href="">Subscription/Right Period</a></li>
                                            <li><a href="">State</a></li>
                                            <li><a href="">City/Town</a></li>
                                            <li><a href="">Pincode</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-2">
                                        <h5>

                                        </h5>
                                    </div>
                                    <div class="col-sm-4">
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="{{URL::to('createpublisher')}}"><button type="submit" class="btn btn-warning col-md-12" style="margin-bottom:10px;" >Add New Publisher </button></a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel-body no-padding-bottom">
                                <div class="box-body">
                                    <div class="form-group">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Publisher Name</th>
                                                <th>Email</th>
                                                <th>Number Institutions</th>
                                                <th>State</th>
                                                <th>City/Town </th>
                                                <th>Pincode</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($pub as $publisher)
                                            <tr>
                                                <td>{{$publisher->publisher_name}}</td>
                                                <td>{{$publisher->email}}</td>
                                                <td>{{$publisher->no_of_institution}}</td>
                                                 <td>{{$publisher->state}}</td>
                                                 <td>{{$publisher->city}}</td>
                                                 <td>{{$publisher->pincode}}</td>
                                                 <td><a href="{{URL::to($publisher->id.'/viewpublisher')}}"><i class="fa fa-eye"></i></a>
                                                    <a href="{{URL::to($publisher->id.'/editpublisher')}}"><i class="fa fa-edit"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

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