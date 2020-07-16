<!DOCTYPE html>
<html lang="en">

<head>
    <!-- import header-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>@yield('title')</title>

    <!-- CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    @yield('css')
</head>

<body>
    <!-- import navbar -->
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">SIASAT</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <span class="pr-3" style="color: bisque;"> {{Session::get('nama')}}
                    <a class="pl-2" style="color: bisque; text-decoration: none;" href="{{URL::to('/admin/logout')}}">Sign out</a>
                </span>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- import sidebar -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-2 mb-1 text-muted">
                            <span>MENU</span>
                        </h6>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/admin')}}">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/admin/detailmatkul')}}">
                                Detail Matakuliah
                            </a>
                        </li>
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>MASTER DATA</span>
                        </h6>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/admin/mahasiswa')}}">
                                Data Mahasiswa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/admin/dosen')}}">
                                Data Dosen
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/admin/matakuliah')}}">
                                Data Matakuliah
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/admin/fakultas')}}">
                                Data Fakultas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/admin/ruangan')}}">
                                Data Ruangan
                            </a>
                        </li>
                    </ul>
                    
                    <img src="{{asset('img/logo.png')}}" width="80%" style="position: absolute;bottom:20px;padding-left: 25px"; alt="">
                    
                </div>
            </nav>

            <!-- content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>


    <!-- import javascript -->
    <script src="/js/jquery-3.5.1.slim.min.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>

    @yield('javascript')

</body>

</html>