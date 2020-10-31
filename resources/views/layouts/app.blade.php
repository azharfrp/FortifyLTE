<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        
        <!-- Title -->
        <title>@yield('title', 'Fortify') | {{ config('app.name', 'Gampangan') }}</title>
        
        <!-- Fontawesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">

        <!-- Select2 -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">

        <!-- AdminLTE -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        <!-- Livewire -->
        <livewire:styles/>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-widget="pushmenu">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                </ul>
            </nav>
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="{{ url('/') }}" class="brand-link">
                    <img src="https://laravel.com/img/logomark.min.svg" class="brand-image">
                    <span class="brand-text">{{ config('app.name', 'Gampangan') }}</span>
                </a>
                <div class="sidebar">
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Main Menu -->
                            <li class="{{ request()->routeIs(['home', 'example.crud']) ? 'nav-item has-treeview menu-open' : 'nav-item' }}">
                                <a href="#" class="{{ request()->routeIs(['home', 'example.crud']) ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>Main Menu <i class="right fas fa-angle-left"></i></p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'nav-link active' : 'nav-link' }}">
                                            <i class="{{ request()->routeIs('home') ? 'fas fa-circle nav-icon' : 'far fa-circle nav-icon' }}"></i>
                                            <p>Home</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('example.crud') }}" class="{{ request()->routeIs('example.crud') ? 'nav-link active' : 'nav-link' }}">
                                            <i class="{{ request()->routeIs('example.crud') ? 'fas fa-circle nav-icon' : 'far fa-circle nav-icon' }}"></i>
                                            <p>CRUD Example</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <main role="main">
                <section class="content-wrapper">
                    <div class="content-header">
                        <div class="container-fluid">
                            <h1 class="m-0 text-dark">@yield('title')</h1>
                        </div>
                    </div>
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <aside class="control-sidebar control-sidebar-dark d-none">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </aside>
            <footer class="main-footer">
                <strong>Copyright &copy; 2020. {{ config('app.name', 'Gampangan') }}. All Rights Reserved.</strong>
                <div class="float-right d-none d-sm-inline">
                    <small>Built with <i class="fas fa-heart text-pink"></i> <a href="https://www.gampangan.com">Azhar Fahrurazi</a></small>
                </div>
            </footer>
        </div>
        <!-- Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <!-- Bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

        <!-- AdminLTE -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"></script>

        <!-- Livewire -->
        <livewire:scripts/>

        <!-- Alert -->
        @livewireAlertScripts

        <!-- Turbolinks -->
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>