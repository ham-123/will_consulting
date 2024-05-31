<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>@yield('title')</title>

        <link href="{{ asset('admin/images/favicon/favicon.png') }}" rel="shortcut icon" type="image/png">
        <link href="{{ asset('admin/images/favicon.png') }}" rel="apple-touch-icon" sizes="57x57">
        <link href="{{ asset('admin/images/favicon.png') }}" rel="apple-touch-icon" sizes="72x72">
        <link href="{{ asset('admin/images/favicon.png') }}" rel="apple-touch-icon" sizes="114x114">
        <link href="{{ asset('admin/images/favicon.png') }}" rel="apple-touch-icon" sizes="144x144">

    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/font-awesome.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/material-design-iconic-font.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/animate.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/layout.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/components.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/widgets.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/plugins.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/pages.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/bootstrap-extend.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/common.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin/css/responsive.css') }}">
    <link type="text/css" id="themes" rel="stylesheet" href="#">
</head>

<body class="leftbar-view bg-dark text-white">
    <header class="topbar clearfix">
        <div class="top-search-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="search-input-addon">
                            <span class="addon-icon"><i class="zmdi zmdi-search"></i></span>
                            <input type="text" class="form-control top-search-input" placeholder="Search">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="topbar-left pull-left">
            <div class="clearfix">
                <ul class="left-branding pull-left clickablemenu ttmenu dark-style menu-color-gradient bg-dark text-white">
                    <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu text-white"></i></span></li>
                    <li>
                        <div class="logo">
                            <a href="{{Route ('dashboard')}}" title="Admin Template"><img src="{{ asset('admin/images/logo.png') }}" alt="logo"></a>
                        </div>
                    </li>
                </ul>
                <!--Mobile Search and Rightbar Toggle-->
                <ul class="branding-right pull-right">
                    <li><a href="{{Route ('dashboard')}}" class="btn-mobile-search btn-top-search"><i class="zmdi zmdi-search text-white"></i></a></li>
                    <li><a href="{{Route ('dashboard')}}" class="btn-mobile-bar"><i class="zmdi zmdi-menu text-white"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="topbar-right pull-right">
            <div class="clearfix">
                <!--Mobile View Leftbar Toggle-->
                <ul class="left-bar-switch pull-left">
                    <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu text-white"></i></span></li>
                </ul>
            </div>
        </div>
    </header>

    <aside class="leftbar bg-dark">
        <div class="left-aside-container">
            <div class="user-profile-container">
                <div class="user-profile clearfix"></div>
                <div class="admin-bar">
                    <ul>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                                @csrf
                                <button name="logout" type="submit" class="Btn" style="background: none; border: none; cursor: pointer;">
                                    <i class="zmdi zmdi-power text-white" style="font-size: 24px;  color: white;"></i>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="list-accordion tree-style">
                <li><a href="{{Route ('dashboard')}}" class="text-white">Accueil</a></li>
                <li><a href="{{Route ('services.index')}}" class="text-white">Service</a></li>
                <li><a href="{{Route ('formations.index')}}"" class="text-white">Formation</a></li>
                <li><a href="{{Route ('recrutements.index')}}" class="text-white">Recrutement</a></li>
                <li><a href="{{Route ('articles.index')}}" class="text-white">Article</a></li>
                <li><a href="{{Route ('rdvs.index')}}" class="text-white">Rendez-vous</a></li>
                <li><a href="without-rightbar.html" class="text-white">Contact</a></li>
            </ul>
        </div>
    </aside>

    @yield('content')

    <script src="{{ asset('admin/js/lib/jquery.js') }}"></script>
    <script src="{{ asset('admin/js/lib/jquery-migrate.js') }}"></script>
    <script src="{{ asset('admin/js/lib/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/js/lib/jquery.ui.js') }}"></script>
    <script src="{{ asset('admin/js/lib/jRespond.js') }}"></script>
    <script src="{{ asset('admin/js/lib/nav.accordion.js') }}"></script>
    <script src="{{ asset('admin/js/lib/hover.intent.js') }}"></script>
    <script src="{{ asset('admin/js/lib/hammerjs.js') }}"></script>
    <script src="{{ asset('admin/js/lib/jquery.hammer.js') }}"></script>
    <script src="{{ asset('admin/js/lib/jquery.fitvids.js') }}"></script>
    <script src="{{ asset('admin/js/lib/scrollup.js') }}"></script>
    <script src="{{ asset('admin/js/lib/smoothscroll.js') }}"></script>
    <script src="{{ asset('admin/js/lib/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin/js/lib/jquery.syntaxhighlighter.js') }}"></script>
    <script src="{{ asset('admin/js/lib/velocity.js') }}"></script>
    <script src="{{ asset('admin/js/lib/jquery-jvectormap.js') }}"></script>
    <script src="{{ asset('admin/js/lib/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('admin/js/lib/jquery-jvectormap-us-aea.js') }}"></script>
    <script src="{{ asset('admin/js/lib/smart-resize.js') }}"></script>
    <script src="{{ asset('admin/js/lib/icheck.js') }}"></script>
    <script src="{{ asset('admin/js/lib/jquery.switch.button.js') }}"></script>
    <script src="{{ asset('admin/js/lib/chart/sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('admin/js/lib/chart/easypie/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/chart/flot/excanvas.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/chart/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/chart/flot/curvedLines.js') }}"></script>
    <script src="{{ asset('admin/js/lib/chart/flot/jquery.flot.time.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/chart/flot/jquery.flot.stack.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/chart/flot/jquery.flot.axislabels.js') }}"></script>
    <script src="{{ asset('admin/js/lib/chart/flot/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/chart/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/chart/flot/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('admin/js/lib/chart/flot/jquery.flot.pie.min.js') }}"></script>
    <script src="{{ asset('admin/js/lib/jquery.maskedinput.js') }}"></script>
    <script src="{{ asset('admin/js/lib/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/js/lib/jquery.form.js') }}"></script>
    <script src="{{ asset('admin/js/lib/j-forms.js') }}"></script>
    <script src="{{ asset('admin/js/lib/jquery.loadmask.js') }}"></script>
    <script src="{{ asset('admin/js/lib/vmap.init.js') }}"></script>
    <script src="{{ asset('admin/js/lib/theme-switcher.js') }}"></script>
    <script src="{{ asset('admin/js/apps.js') }}"></script>
</body>

</html>
