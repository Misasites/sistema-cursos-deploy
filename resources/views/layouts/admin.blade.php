{{--<!DOCTYPE html>--}}
{{--<html lang="pt-br">--}}

{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link rel="icon" href="{{ asset('plugin.png') }}" type="image/x-icon">--}}
{{--    <link id="themeLink" href="https://bootswatch.com/5/United/bootstrap.min.css" rel="stylesheet">--}}

{{--    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">--}}
{{--    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js" crossorigin="anonymous"></script>--}}

{{--    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}

{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}

{{--    <title>Misa</title>--}}
{{--</head>--}}

{{--<body class="sb-nav-fixed">--}}

{{--    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-nav">--}}
{{--        <!-- Navbar Brand-->--}}
{{--        <a class="navbar-brand ps-3" href="#">Misa</a>--}}
{{--        <!-- Sidebar Toggle-->--}}
{{--        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i--}}
{{--                class="fas fa-bars"></i></button>--}}
{{--        <!-- Navbar Search-->--}}
{{--        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">--}}

{{--        </form>--}}
{{--        <!-- Navbar-->--}}
{{--        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">--}}
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"--}}
{{--                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>--}}
{{--                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                    <li><a class="dropdown-item" href="{{ route('profile.show') }}">Perfil</a></li>--}}
{{--                    <li>--}}
{{--                        <hr class="dropdown-divider" />--}}
{{--                    </li>--}}
{{--                    <li><a class="dropdown-item" href="{{ route('login.destroy') }}">Sair</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </nav>--}}

{{--    <div id="layoutSidenav">--}}
{{--        <div id="layoutSidenav_nav">--}}
{{--            <nav class="sb-sidenav accordion sb-sidenav-five" id="sidenavAccordion">--}}
{{--                <div class="sb-sidenav-menu">--}}
{{--                    <div class="nav">--}}

{{--                        <a @class(['nav-link', 'active' => isset($menu) && $menu == 'dashboard']) href="{{ route('dashboard.index') }}">--}}
{{--                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>--}}
{{--                            Dashboard--}}
{{--                        </a>--}}

{{--                        @can('index-user')--}}
{{--                            <a @class(['nav-link', 'active' => isset($menu) && $menu == 'users']) href="{{ route('user.index') }}">--}}
{{--                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>--}}
{{--                                Usuários--}}
{{--                            </a>--}}
{{--                        @endcan--}}

{{--                        @can('index-course')--}}
{{--                            <a @class(['nav-link', 'active' => isset($menu) && $menu == 'courses']) href="{{ route('course.index') }}">--}}
{{--                                <div class="sb-nav-link-icon"><i class="fa-solid fa-chalkboard-user"></i></div>--}}
{{--                                Cursos--}}
{{--                            </a>--}}
{{--                        @endcan--}}

{{--                        @can('index-role')--}}
{{--                            <a @class(['nav-link', 'active' => isset($menu) && $menu == 'roles']) href="{{ route('role.index') }}">--}}
{{--                                <div class="sb-nav-link-icon"><i class="fa-solid fa-network-wired"></i></div>--}}
{{--                                Papéis--}}
{{--                            </a>--}}
{{--                        @endcan--}}

{{--                        @can('index-permission')--}}
{{--                            <a @class(['nav-link', 'active' => isset($menu) && $menu == 'permissions']) class="nav-link" href="{{ route('permission.index') }}">--}}
{{--                                <div class="sb-nav-link-icon"><i class="fa-regular fa-file"></i></div>--}}
{{--                                Páginas--}}
{{--                            </a>--}}
{{--                        @endcan--}}

{{--                        <a class="nav-link" href="{{ route('login.destroy') }}">--}}
{{--                            <div class="sb-nav-link-icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></div>--}}
{{--                            Sair--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="sb-sidenav-footer">--}}
{{--                    <div class="small">Logado:--}}
{{--                        @if (auth()->check())--}}
{{--                            {{ auth()->user()->name }}--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </nav>--}}
{{--        </div>--}}

{{--        <div id="layoutSidenav_content">--}}

{{--            <main>--}}
{{--                @yield('content')--}}
{{--            </main>--}}

{{--            <footer class="py-4 bg-light mt-auto">--}}
{{--                <div class="container-fluid px-4">--}}
{{--                    <div class="d-flex align-items-center justify-content-between small">--}}
{{--                        <div class="text-muted">Copyright &copy; Celke {{ date('Y') }}</div>--}}
{{--                        <div>--}}
{{--                            <a href="#" class="text-decoration-none">Política de Privacidade</a>--}}
{{--                            &middot;--}}
{{--                            <a href="#" class="text-decoration-none">Termos de Uso</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </footer>--}}

{{--        </div>--}}

{{--    </div>--}}

{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"--}}
{{--            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"--}}
{{--            crossorigin="anonymous"></script>--}}
{{--</body>--}}

{{--</html>--}}



    <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('plugin.png') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link id="themeLink" href="https://bootswatch.com/5/lux/bootstrap.min.css" rel="stylesheet">
    <title>Sistema de Cursos</title>
    </head>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-nav">
    <a class="navbar-brand ps-3" href="#">Misa</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
               data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('profile.show') }}">Perfil</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="{{ route('login.destroy') }}">Sair</a></li>
            </ul>
        </li>
    </ul>
</nav>

<!-- Layout -->
<div id="layoutSidenav">
    <!-- Sidebar -->
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a @class(['nav-link', 'active' => isset($menu) && $menu == 'dashboard'])
                       href="{{ route('dashboard.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    @can('index-user')
                        <a @class(['nav-link', 'active' => isset($menu) && $menu == 'users'])
                           href="{{ route('user.index') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                            Usuários
                        </a>
                    @endcan
                    @can('index-course')
                        <a @class(['nav-link', 'active' => isset($menu) && $menu == 'courses'])
                           href="{{ route('course.index') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                            Cursos
                        </a>
                    @endcan
                    @can('index-role')
                        <a @class(['nav-link', 'active' => isset($menu) && $menu == 'roles'])
                           href="{{ route('role.index') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-network-wired"></i></div>
                            Papéis
                        </a>
                    @endcan
                    @can('index-permission')
                        <a @class(['nav-link', 'active' => isset($menu) && $menu == 'permissions'])
                           href="{{ route('permission.index') }}">
                            <div class="sb-nav-link-icon"><i class="fa-regular fa-file"></i></div>
                            Páginas
                        </a>
                    @endcan
                    <a class="nav-link" href="{{ route('login.destroy') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></div>
                        Sair
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logado:
                    @if (auth()->check())
                        {{ auth()->user()->name }}
                    @endif
                </div>
            </div>
        </nav>
    </div>

    <!-- Conteúdo -->
    <div id="layoutSidenav_content">
        <main>
            @yield('content')
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Misa {{ date('Y') }}</div>
                    <div>
                        <a href="#" class="text-decoration-none">Política de Privacidade</a>
                        &middot;
                        <a href="#" class="text-decoration-none">Termos de Uso</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>

</html>