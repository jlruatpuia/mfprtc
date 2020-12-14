<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | HoneyDew Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('front/css/vendor/fontawesome.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
    <link href="{{ asset('admin/js/toastr/toastr.min.css') }}" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('css-after')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('admin.index') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#"  data-toggle="dropdown">
{{--                                        {{ Auth::user()->name }}--}}
                    <span class="img-circle"><i class="fa fa-user"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a class="dropdown-item" href="javascript:void(0);">{{ Auth::user()->name }}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('admin.index') }}" class="brand-link">
            <img src="{{ asset('images/honeydew.svg') }}"
                 alt="AdminLTE Logo"
                 class="brand-image img-circle"
                 style="opacity: .8; width:80px">
            <span class="brand-text font-weight-light">HoneyDew</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('admin.index') }}" class="nav-link {{ (request()->is('admin/home')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview {{ (request()->is('admin/product*')) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ (request()->is('admin/product*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th-list"></i>
                            <p>
                                Products
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.products') }}" class="nav-link {{ (request()->is('admin/products')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.product.new') }}" class="nav-link {{ (request()->is('admin/product/new')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview {{ (request()->is('admin/training*')) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ (request()->is('admin/training*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-chart-line"></i>
                            <p>
                                Training
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.trainings') }}" class="nav-link {{ (request()->is('admin/trainings')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.training.new') }}" class="nav-link {{ (request()->is('admin/training/new')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.trainings.applications') }}" class="nav-link {{ (request()->is('admin/trainings/applications')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Applications</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.photos') }}" class="nav-link {{ (request()->is('admin/photo*')) ? 'active' : '' }}">
                            <i class="nav-icon far fa-images"></i>
                            <p>
                                Photos
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
{{--        <div class="float-right d-none d-sm-block">--}}
{{--            <b>Version</b> 3.0.5--}}
{{--        </div>--}}
        <strong>Copyright <a href="mailto:mfprtc@gmail.com">MFPRTC</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('admin/js/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
{{--<script src="{{ asset('admin/js/sweetalert2/sweetalert2.min.js') }}"></script>--}}
<!-- AdminLTE App -->
<script src="{{ asset('admin/js/adminlte.min.js') }}"></script>
<script src="{{ asset('admin/js/toastr/toastr.min.js') }}"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}")
    @endif
    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}")
    @endif
    @if(Session::has('error'))
    toastr.error("{{Session::get('error')}}")
    @endif
</script>
@yield('js-after')
</body>
</html>
