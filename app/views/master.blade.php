<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>
        @section("title")
            {{@$title}}
        @show
    </title>
    <meta name="keywords" content="your, awesome, keywords, here"/>
    <meta name="author" content="Abu Saleh Muhammad Shaon"/>
    <meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{HTML::style('bower_components/bootstrap/dist/css/bootstrap.css');}}
    {{HTML::style('bower_components/font-awesome/css/font-awesome.css');}}
    {{HTML::style('bower_components/smalot-bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css');}}
    {{HTML::style('bower_components/freewall/example/css/pinterest-style.css');}}
    {{HTML::style('css/styles.css');}}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Photo Gallery</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                @if (Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>{{ HTML::link('profile', 'View My Profile') }}</li>
                        <li class="divider"></li>
                        <li>{{ HTML::link('#', 'My Collections') }}</li>
                    </ul>
                </li>
                @endif
            </ul>
            <div class="navbar-collapse collapse pull-right">
                @if (!Auth::check())
                <ul class="nav navbar-nav">
                    <li>
                        {{ HTML::link('register', 'Register') }}
                    </li>
                    <li>
                        {{ HTML::link('login', 'Log In') }}
                    </li>
                </ul>
                @else
                <div class="welcome-user">Hi, {{Auth::user()->name}} <a title="Logout" href="/logout"><i class="fa fa-sign-out icon-white"></i></a></div>
                @endif
            </div>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>
<div class="container theme-showcase l4body">
    <!-- Content -->
    @yield('content')
    <!-- ./ content -->
</div>
{{HTML::script('bower_components/jquery/jquery.js');}}
{{HTML::script('bower_components/bootstrap/dist/js/bootstrap.js');}}
{{HTML::script('bower_components/smalot-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js');}}
{{HTML::script('bower_components/freewall/freewall.js');}}
{{HTML::script('bower_components/bootstrap-filestyle/src/bootstrap-filestyle.min.js');}}
{{HTML::script('js/scripts.js');}}
</body>
</html>