<!DOCTYPE html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />

    <title>Tugas PPL</title>
</head>

<body>
    <div class="login-bg-overlay au-sign-in-basic"></div>

    <!--start wrapper-->
    <div class="wrapper">
        {{-- <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-white p-3">
                <div class="container-fluid">
                    <a href="javascript:;"><img src="assets/images/logo-icon-3.png" alt="" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3 login-menu-2">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">Contact</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <a href="javascript:;" class="btn btn-sm btn-primary px-4 radius-30">Buy Now</a>
                        </form>
                    </div>
                </div>
            </nav>
        </header> --}}

        @yield('content')

        @include('components.footer')

        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
