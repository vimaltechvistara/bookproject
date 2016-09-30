<?php
$menu_db="";
$menu_bk="active";
$menu_cl="";
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
				<i class="fa fa-home position-left"></i> <span>View Institute Profile</span></h4>
			</div>	
			
			
			<ul class="breadcrumb">
				<li><a href=""><i class="fa fa-home"></i>Home</a></li>
				<li class="active">Dashboard</li>
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
						View Institute Details
						</h4>	
			</div>
			<div class="col-sm-2">
						<a href="{{URL::to('/')}}/institutelists"><button type="submit" class="btn btn-warning col-md-12" style="margin-bottom:10px;" >Add Institute List</button></a>
                      
			</div>
			<div class="col-sm-2">
					  <a href="{{URL::to('/')}}/{{$id}}/editinstitution"><button type="submit" class="btn btn-info col-md-12" style="margin-bottom:10px;">Edit Institute Profile</button></a>
                  
			</div>
			</div>
			</div>

				<div class="panel-body no-padding-bottom">
						<form class="form-horizontal" action="#">
                            @foreach($institute as $institute)
				<div class="row">
							<div class="col-md-7">					
							<div class="form-group">
								<label class="control-label col-lg-4">Name of Insitutions</label>
								<div class="col-lg-8">
									<div  class=""> {{$institute->name_of_insitutions}}</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-lg-4">Address</label>
								<div class="col-lg-8">
									<div type="text" class="" >{{$institute->address}}</div>
								</div>
							</div>
	
							<div class="form-group ">
								<label class="control-label col-lg-4">State</label>
								<div class="col-lg-8">
									<div type="text" class="" >{{$institute->state}}</div>
								</div>
							</div>
							<div class="form-group ">
								<label class="control-label col-lg-4">Phone</label>
								<div class="col-lg-8">
									<div type="text" class="" >{{$institute->phone}}</div>
								</div>
							</div>
								<div class="form-group ">
								<label class="control-label col-lg-4">E-mail</label>
								<div class="col-lg-8">
									<div type="text" class="" >{{$institute->email}}</div>
								</div>
							</div>
							<div class="form-group ">
								<label class="control-label col-lg-4">Number of Students</label>
								<div class="col-lg-8">
									<div type="text" class="" >{{$institute->number_of_students}}</div>
								</div>
							</div>
							<div class="form-group ">
								<label class="control-label col-lg-4">User name</label>
								<div class="col-lg-8">
									<div type="text" class="" >{{$institute->user_name}}</div>
								</div>
							</div>

							</div>
 </div>
                                @endforeach()
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