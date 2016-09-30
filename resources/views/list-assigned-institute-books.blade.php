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
                            <i class="fa fa-home position-left"></i> <span>Assigned Books</span></h4>
                    </div>


                    <ul class="breadcrumb">
                        <li><a href=""><i class="fa fa-home"></i>Home</a></li>
                        <li class="active">Assigned Books</li>
                    </ul>

                </div>
            </div>

            <div class="content">

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Select Assigned Book By
                                            <span class="caret"></span> </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a href="">Institution Name </a></li>
                                            <li><a href="">Number of Books Assigned</a></li>
                                            <li><a href="">Subscription/Rights Period</a></li>
                                            <li><a href="">State</a></li>
                                            <li><a href="">City/town</a></li>
                                            <li><a href="">Pincode</a></li>
                                        </ul>
                                    </div>


                                </div>
                            </div>
                            <div class="panel-body no-padding-bottom">

                                <div class="box-body">
                                    <div class="form-group">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Institution Name</th>
                                                <th>Number of Books Assigned</th>
                                                <th>State</th>
                                                <th>City/Town </th>
                                                <th>Pincode</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td>St.John's International School</td>
                                                <td>2000</td>
                                                <td>Tamlnadu</td>
                                                <td>Madurai</td>
                                                <td>625111</td>
                                                <td>
                                                    <a href="assigned_book_details.php"><input type="submit" value="view">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>St.John's International School</td>
                                                <td>2000</td>
                                                <td>Tamlnadu</td>
                                                <td>Madurai</td>
                                                <td>625111</td>
                                                <td>

                                                    <a href="assigned_book_details.php"><input type="submit" value="view">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>St.John's International School</td>
                                                <td>2000</td>
                                                <td>Tamlnadu</td>
                                                <td>Madurai</td>
                                                <td>625111</td>
                                                <td>
                                                    <a href="assigned_book_details.php"><input type="submit" value="view">
                                                </td>
                                            </tr>
                                            </tbody>
                                            <div class="form-group">
                                            </div>
                                        </table>
                                    </div>
                                </div>
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