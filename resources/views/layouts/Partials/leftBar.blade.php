<link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/icons.min.css')}}">

<div class="leftbar-tab-menu">
    <div class="main-icon-menu">
        <a href="/dashboard" class="logo logo-metrica d-block text-center">
            <span>
                <img src="{{asset('assets/images/logopago.jpeg" alt="logo-small" class="rounded-circle me-2 thumb-sm')}}">
            </span>
        </a>
        <div class="main-icon-menu-body">
            <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" data-bs-trigger="hover">
                        <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                            <i class="fas fa-chart-bar menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Configuracion" data-bs-trigger="hover">
                        <a href="#MetricaPages" id="pages-tab" class="nav-link">
                            <i class="fas fa-cogs menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
       <div class="pro-metrica-end">
            <a href="" class="profile">
                <img src="../plantilla/assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle thumb-sm">
            </a>
        </div>
    </div>




<div class="main-menu-inner">

    <div class="topbar-left">

        <a href="index.html" class="logo">
             <span>
                <img src="" class="logo-lg logo-dark">
                <img src="" alt="logo-large" class="logo-lg logo-light">
            </span>
        </a>
    </div>

    <div class="menu-body navbar-vertical tab-content" data-simplebar>
        <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane" role="tabpanel"
            aria-labelledby="dasboard-tab">
            <div class="title-box">
                <h6 class="menu-title">Dashboard</h6>
            </div>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Estadisticas</a>
                </li>
            </ul>
        </div>
        <div id="MetricaPages" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="pages-tab">
                        <div class="title-box">
                <h6 class="menu-title"> Administración</h6>
            </div>
            <div class="navbar-collapse">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarElements">
                        Configuracion<nav></nav>
                        </a>
                        <div class="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="{{route('admin.users.index')}}" class="nav-link" href="adminUsuarios">Usuarios sistema</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a href="{{route('admin.usuarios.index')}}" class="nav-link" href="adminUsuarios">Usuarios </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.roles.index')}}">Roles</a>
                                </li><!--end nav-item-->
                                 <li class="nav-item">
                                    <a class="nav-link" href="/configuracion">Cambio Clave</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

    </div>
</div>
</div>
<script src="{{asset('assets/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/js/pages/hospital-index.init.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
