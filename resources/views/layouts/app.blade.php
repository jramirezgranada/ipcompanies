<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/all-admin-lte.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/skins/_all-skins.min.css') }}" rel="stylesheet">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div id="app">
    <header class="main-header">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">IP</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>{{ env('APP_NAME') }}</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ auth()->user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    {{ auth()->user()->name }}
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>
    </header>

    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="height: auto;">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ auth()->user()->name }}</p>
                </div>
            </div>

            <ul class="sidebar-menu tree" data-widget="tree">
                <li class="header">{{__('trans.MENU')}}</li>
                <li class="active">
                    <a href="{{ route('home') }}">
                        <i class="fa fa-home"></i> <span>{{ __('trans.Home') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('companies.index') }}">
                        <i class="fa fa-building"></i> <span>{{ __('trans.Companies') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('employees.index') }}">
                        <i class="fa fa-users"></i> <span>{{ __('trans.Employees') }}</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper" style="min-height: 926px;">
        @yield('content')
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.13
        </div>
        <strong><a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
        reserved.
        <strong>Used by <a href="https://jramirezgranada.com">JramirezGranada</a></strong>
    </footer>
</div>

<!-- Scripts -->
<script src="{{ asset('js/all-admin-lte.js') }}" defer></script>

</body>
</html>
