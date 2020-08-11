<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- Icons -->
    <link href="{{ asset('vendors/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/css/simple-line-icons.min.css') }}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{ asset('vendors/css/style.css') }}" rel="stylesheet">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    
    <div id="app">
    <navbar-component></navbar-component>
        <div class="app-body">
            <div class="sidebar">
                <nav class="sidebar-nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="main.html"><i class="icon-speedometer"></i> Escritorio</a>
                        </li>
                        <li class="nav-title">
                            Mantenimiento
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bag"></i> Almacén</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="icon-bag"></i> Categorías</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="icon-bag"></i> Artículos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-wallet"></i> Compras</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="i#"><i class="icon-wallet"></i> Ingresos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="icon-notebook"></i> Proveedores</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i> Ventas</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="i#"><i class="icon-basket-loaded"></i> Ventas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="icon-notebook"></i> Clientes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Acceso</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="i#"><i class="icon-user"></i> Usuarios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="icon-user-following"></i> Roles</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Reportes</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="i#"><i class="icon-chart"></i> Reporte Ingresos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="icon-chart"></i> Reporte Ventas</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="main.html"><i class="icon-book-open"></i> Ayuda <span class="badge badge-danger">PDF</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="main.html"><i class="icon-info"></i> Acerca de...<span class="badge badge-info">IT</span></a>
                        </li>
                    </ul>
                </nav>
                <button class="sidebar-minimizer brand-minimizer" type="button"></button>
            </div>
            <main class="main">
                @yield('content')
            </main>
        </div>
    </div>
    <footer class="app-footer">
        <span><a href="#">UPV</a> &copy; 2020</span>
        <span class="ml-auto">Desarrollado por <a href="#">Daniel Zuñiga</a></span>
    </footer>

    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('vendors/js/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/js/pace.min.js') }}"></script>
    <!-- Plugins and scripts required by all views -->
    <script src="{{ asset('vendors/js/Chart.min.js') }}"></script>
    <!-- GenesisUI main scripts -->
    <script src="{{ asset('vendors/js/template.js') }}"></script>
</body>

</html>