<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{Html::style("assets/images/favicon.png")}}
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

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
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
