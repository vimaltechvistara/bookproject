<?php
$menu_db="";
$menu_bk="";
$menu_cl="active";
$menu_su="";
$menu_in="";
$menu_ib="";
$menu_st="";
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
                            <i class="fa fa-home position-left"></i> <span>Edit Student</span></h4>
                    </div>
                    <ul class="breadcrumb">
                        <li><a href=""><i class="fa fa-home"></i>Home</a></li>
                        <li class="active">Edit Student</li>
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
                                        </h4>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="{{URL::to('/')}}/subjectlists"><button type="submit" class="btn btn-warning col-md-12" style="margin-bottom:10px;" >View All Students</button></a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="{{URL::to('/')}}/createsubject"><button type="submit" class="btn btn-info col-md-12" style="margin-bottom:10px;">Add Multiple Students</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body no-padding-bottom">
                                {!! Form::open( array( 'route' => array('updatestudent',$id) ,'role' => 'form' ,'method'=>'POST', 'files'=>true,'class'=>'form-horizontal nobottommargin') ) !!}
                                   @foreach($student as $stud)
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Student Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Subject Name" name="student_name" value="{{$stud->student_name}}">
                                        </div>
                                    </div>
                                @endforeach()
                                    <div class="form-group">
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-success" style="float:right;">Save</button>
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