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
    <title>Login App</title>
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
                <form class="form-horizontal form-material" id="registerform" method="POST">
                    {{csrf_field()}}
                    <h3 class="box-title m-b-20">Sign Up</h3>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Name" required name="name">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Email" required name="email">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Password" required name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Confirm Password" required name="confirm_password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-success">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup" required> I agree to all <a href="#">Terms</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            <div>Already have an account? <a href="login" class="text-info m-l-5"><b>Sign In</b></a></div>
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
</body>

</html>