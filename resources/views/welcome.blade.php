<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>Login Inspektorat Lampung Tengah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Tenaga Ahli Inspektorat Lampung Tengah" name="description" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('template')}}/assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="{{url('template')}}/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{url('template')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url('template')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('template')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{url('template')}}/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4 card-bg-fill">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Selamat Datang!</h5>
                                    <p class="text-muted">Silahkan Login Untuk Melanjutkan.</p>
                                </div>
                                
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <div class="p-2 mt-4">
                                    <form action="{{url('login')}}" method="POST">
                                        @csrf
                                        @method('POST')

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="auth-pass-reset-basic.html" class="text-muted">Forgot password?</a>
                                            </div>
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input" name="password">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Don't have an account ? <a href="{{url('register')}}" class="fw-semibold text-primary text-decoration-underline"> Signup </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{url('template')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('template')}}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{url('template')}}/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{url('template')}}/assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{url('template')}}/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{url('template')}}/assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="{{url('template')}}/assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="{{url('template')}}/assets/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="{{url('template')}}/assets/js/pages/password-addon.init.js"></script>
</body>

</html>