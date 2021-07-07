<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Compras-Ventas con Laravel y Vue Js- webtraining-it.com">
    <meta name="keyword" content="Sistema Compras-Ventas con Laravel y Vue Js">
    <title>{{env('APP_NAME')}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js">
    <!-- Icons -->
    <link href="{{asset('css/plantilla.css')}}" rel="stylesheet">

</head>

<body class="sidebar-lg-show header-fixed sidebar-fixed aside-menu-fixed aside-menu-off-canvas">
<div id="app">
    <div class="app aside-menu-fixed pace-done pace-done">
        <header class="app-header navbar m-0 p-0">
            <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--PONER LOGO-->
            <!--<a class="navbar-brand" href="#"></a>-->
            <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav navbar-nav d-md-down-none ">
                <li class="nav-item px-3">
                    <router-link :to="{name:'dashboard'}" class="nav-link"  >Dashbord</router-link>
                </li>

            </ul>
            <ul class="nav navbar-nav ml-auto mr-3">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        <img src="/img/usuario/{{Auth::user()->imagen}}" class="img-avatar" alt="admin@bootstrapmaster.com">
                        <span class="d-md-down-none">{{Auth::user()->usuario}} </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header text-center">
                            <strong>Cuenta</strong>
                        </div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-lock"></i> Cerrar sesión</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            </ul>
        </header>
        <div class="app-body">
            @if(Auth::check())
                @if (Auth::user()->idrol == 1)
                    @include('plantilla.sidebaradministrador')
                @elseif (Auth::user()->idrol == 2)
                    @include('plantilla.sidebarvendedor')
                @elseif (Auth::user()->idrol == 3)
                    @include('plantilla.sidebarcomprador')
                @else

                @endif

            @endif
            <router-view class="animated fadeIn" ></router-view>

            <!-- Contenido Principal -->
            <!-- /Fin del contenido principal -->
        </div>
        <footer class="app-footer fixed-bottom py-3">
            <div>
                <a href="https://ronaladrianruizavila.com">Nanbits SA.</a>
                <span>{{\Carbon\Carbon::now()->year}}</span>
            </div>
            <div class="ml-auto">
                <span>Copyright&copy; {{\Carbon\Carbon::now()->year}} - {{\Carbon\Carbon::now()->addYear()->year}} </span>
            </div>
        </footer>
    </div>
</div>

<!-- Bootstrap and necessary plugins -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/plantilla.js')}}"></script>

</body>

</html>
