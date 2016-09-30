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
    {!! Html::style( asset('fonts/fonts.css')) !!}
    {!! Html::style( asset('assets/font-awesome/css/font-awesome.min.css')) !!}
    {!! Html::style( asset('css/animate.min.css')) !!}
    {!! Html::style( asset('css/bootstrap.css')) !!}
    {!! Html::style( asset('css/main.css')) !!}
    {!! Html::style( asset('css/bootstrap-extended.css')) !!}
    {!! Html::style( asset('css/plugins.css')) !!}
    {!! Html::style( asset('css/color-system.css')) !!}
    {!! Html::style( asset('css/media.css')) !!}
    {!! Html::style( asset('assets/weather/weather-icons.min.css')) !!}
    {!! Html::style( asset('assets/weather/weather-icons-wind.min.css')) !!}
    <link type="text/css" rel="stylesheet" href="index.htm" id="style">
    <link type="text/css" rel="stylesheet" href="index.htm" id="theme">
    <!-- /global stylesheets -->

    <!-- Core JS files -->

    {!!  Html::script('js/jquery.min.js') !!}
    {!!  Html::script('js/bootstrap.min.js') !!}
    {!!  Html::script('js/fancybox.min.js') !!}
    {!!  Html::script('js/app.js') !!}
    {!!  Html::script('js/maps/jvectormap/jvectormap.min.js') !!}
    {!!  Html::script('js/maps/jvectormap/map_files/world.js') !!}
    {!!  Html::script('js/dashboard.js') !!}
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="https://www.google.com/jsapi"></script>
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
                    <i class="fa fa-home position-left"></i> <span>Edit Publisher</span></h4>
                    </div>
                    <ul class="breadcrumb">
                        <li><a href=""><i class="fa fa-home"></i>Home</a></li>
                        <li class="active"> Edit Publisher</li>
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

                                </div>
                            </div>
                            <div class="panel-body no-padding-bottom">
                                {!! Form::open( array( 'route' => array('updatepublisher',$id) ,'role' => 'form' ,'method'=>'POST', 'files'=>true,'class'=>'form-horizontal nobottommargin') ) !!}

                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Name of Publisher</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Name of the Publisher" name="publisher_name" value="{{$pub->publisher_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Address</label>
                                        <div class="col-lg-8">
                                            <textarea type="text" class="form-control" placeholder="Address" name="address">{{$pub->address}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">State</label>
                                        <div class="col-lg-2"><input type="text" class="form-control"  placeholder="Sate" name="state" value="{{$pub->state}}"></div>
                                        <label class="control-label col-lg-1">City/Town</label>
                                        <div class="col-lg-2"><input type="text" class="form-control" placeholder="City/Town" name="city" value="{{$pub->city}}"></div>
                                        <label class="control-label col-lg-1">Pincode</label>
                                        <div class="col-lg-2"><input type="text" class="form-control" placeholder="Pincode" name="pincode" value="{{$pub->pincode}}"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Phone</label>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control"  placeholder="Phone" name="phone" value="{{$pub->phone}}"></div>
                                        <label class="control-label col-lg-2">Mobile</label>
                                        <div class="col-lg-3"><input type="text" class="form-control" placeholder="Mobile" name="mobile" value="{{$pub->mobile}}"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">E-mail</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="E-mail" name="email" value="{{$pub->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Number of Institutions</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Number of Students" name="no_of_institution" value="{{$pub->no_of_institution}}">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-success" style="float:right;">Save Publisher</button>
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