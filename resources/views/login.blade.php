<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PORTRIAT</title>
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
    <link type="text/css" rel="stylesheet" href="login_simple.htm" id="style">
    <link type="text/css" rel="stylesheet" href="login_simple.htm" id="theme">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fancybox.min.js"></script>
    <script src="js/app.js"></script><script src="js/forms/uniform.min.js"></script>

    <div class="page-container login-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">

                    <!-- Simple login form -->

                    <div class="panel panel-body login-form">

                        <div class="text-center mb-20">
                            <div class="">
                                <img src="image/portrait.png" width="200px" />
                            </div>
                            <h5 class="content-group">Login to your account <small class="display-block">Please put your credentials</small></h5>
                        </div>
                        {!! Form::open( array( 'route' => array('dologin') ,'role' => 'form' ,'method'=>'POST', 'files'=>true,'class'=>'form-horizontal nobottommargin') ) !!}

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="text" class="form-control" placeholder="Username" name="email" required="required">
                            <div class="form-control-feedback">
                                <i class="fa fa-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="password" class="form-control" placeholder="Password" name="password" required="required">
                            <div class="form-control-feedback">
                                <i class="fa fa-lock text-muted"></i>
                            </div>
                        </div>

                        <div class="login-options">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="checkbox ml-5">
                                        <label>
                                            <input type="checkbox" class="styled" checked="checked">
                                            Remember me
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-6 text-right mt-10">
                                    <a href="#">Forgot password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <a href="dashboard.php">
                                <button type="submit" class="btn btn-info btn-lg btn-labeled btn-labeled-right btn-block"><b><i class="fa fa-sign-in"></i></b> Sign in</button>	</a>
                        </div>

                    </div>

                    {!! Form::close() !!}

                    <!-- /simple login form -->


                    <!-- Footer -->
                    <div class="footer text-muted">
                        &copy; 2016 portrait <a href="#" target="_blank">PORTRAIT</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;Version - 1.0.0
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <script>
        $(function() {
            $(".styled, .multiselect-container input").uniform({
                radioClass: 'choice'
            });
        });
    </script>
    </body>
</html>