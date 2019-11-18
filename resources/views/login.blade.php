<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16">
    {{Html::style("assets/images/favicon.png")}}
    <title>LoginApp</title>
    <!-- Bootstrap Core CSS -->

    {{Html::style("assets/plugins/bootstrap/css/bootstrap.min.css")}}
    <!-- Custom CSS -->
    {{Html::style("css/style.css")}}
    <!-- You can change the theme colors from here -->
    {{Html::style("css/colors/blue.css")}}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
{{Html::script("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js")}}
{{Html::script("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js")}}
    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
    <div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform" action="{{url('success')}}">
                    {{csrf_field()}}
                    <div id="formdiv">
                        <input type="hidden" id="csrf" value="{{Session::token()}}">
                    <h3 class="box-title m-b-20">Sign In
                    <div id="credentials"  class="show">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="email" id="email" required="" placeholder="Email"> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" id="password" name="password"required="" placeholder="Password"> </div>
                        </div>
                        <div class="form-group hide" id="notification">
                            <div class="col-xs-12">
                                <div class="alert alert-info alert-rounded" id="error" style="font-size: 18px;">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 font-14">
                                <div class="checkbox checkbox-primary pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> Remember me </label>
                                </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><!-- <i class="fa fa-lock m-r-5"></i> --> Forgot pwd?</a> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" id="loginButton" type="submit">Log In</button>
                            </div>
                        </div>

                    </div>
                    <div id="otpdiv" class="hide">
                        <div class="form-group">
                            <div> Enter the OTP sent to your email</div>


                            <input type="otp" class="form-control" id="otp" placeholder="Enter OTP" name="otp" required>
                            </div>
                        <div class="form-group hide" id="notify">
                            <div class="col-xs-12">
                                <div class="alert alert-info alert-rounded" id="new" style="font-size: 18px;">
                                </div>
                            </div>
                        </div>
                        <button id="otpsubmit" type="submit" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"> Submit</button>
                    </div>


                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <div>Don't have an account? <a href="register" class="text-info m-l-5"><b>Sign Up</b></a></div>
                        </div>
                    </div>

                </form>
                <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3>Recover Password</h3>
                            <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email"> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

{{Html::script("assets/plugins/jquery/jquery.min.js")}}
<!-- Bootstrap tether Core JavaScript -->
{{Html::script("assets/plugins/bootstrap/js/popper.min.js")}}


{{Html::script("assets/plugins/bootstrap/js/bootstrap.min.js")}}
<!-- slimscrollbar scrollbar JavaScript -->
{{Html::script("js/jquery.slimscroll.js")}}
<!--Wave Effects -->
{{Html::script("js/waves.js")}}
<!--Menu sidebar -->
{{Html::script("js/sidebarmenu.js")}}
<!--stickey kit -->

{{Html::script("assets/plugins/sticky-kit-master/dist/sticky-kit.min.js")}}
{{Html::script("assets/plugins/sparkline/jquery.sparkline.min.js")}}
<!--Custom JavaScript -->
{{Html::script("js/custom.min.js")}}
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
{{Html::script("assets/plugins/styleswitcher/jQuery.style.switcher.js")}}

{{Html::script("js/login.js")}}
</body>

