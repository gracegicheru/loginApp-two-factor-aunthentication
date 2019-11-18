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

 <div>
     Welcome to our page and have fun while it lasts <a href="{{ url('/logout') }}"> logout</a>
 </div>

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