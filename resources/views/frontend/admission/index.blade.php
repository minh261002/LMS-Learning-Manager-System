<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        Trở thành giảng viên trên Aduca
    </title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="{{ asset('frontend/images/favicon.png') }}">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/tooltipster.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/lelinh014756/fui-toast-js@master/assets/css/toast@1.0.1/fuiToast.min.css">
    <!-- end inject -->
</head>

<body>
    @include('frontend.admission.components.intro-1')

    @include('frontend.admission.components.intro-2')

    <section class="register-area  dot-bg overflow-hidden bg-gray pt-50px">
        <div class="container">
            <div class="feature-heading-content-wrap text-center">
                <div class="section-heading pb-40px">
                    <h2 class="section__title">
                        Điền đầy đủ thông tin của bạn
                    </h2>
                </div><!-- end section-heading -->
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card card-item">
                        <div class="card-body">
                            <form method="post" class="row">
                                <ul class="nav nav-tabs generic-tab pb-30px" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info"
                                            role="tab" aria-controls="info" aria-selected="true">
                                            Thông tin cá nhân
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="identify-tab" data-toggle="tab" href="#identify"
                                            role="tab" aria-controls="identify" aria-selected="false">
                                            Thông tin định danh
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="edu-tab" data-toggle="tab" href="#edu"
                                            role="tab" aria-controls="edu" aria-selected="false">
                                            Trình độ học vấn
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="info" role="tabpanel"
                                        aria-labelledby="info-tab">
                                        @include('frontend.admission.components.info')
                                    </div><!-- end tab-pane -->


                                    <div class="tab-pane fade" id="identify" role="tabpanel"
                                        aria-labelledby="identify-tab">
                                        @include('frontend.admission.components.identify')
                                    </div><!-- end tab-pane -->

                                    <div class="tab-pane fade" id="edu" role="tabpanel"
                                        aria-labelledby="change-email-tab">
                                        @include('frontend.admission.components.edu')
                                    </div><!-- end tab-pane -->
                                </div>
                            </form>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-10 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <!-- ================================
       START FUNFACT AREA
================================= -->
    <!-- end funfact-area -->
    <!-- ================================
       START FUNFACT AREA
================================= -->

    <!-- template js files -->
    <script src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoint.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/fancybox.js') }}"></script>
    <script src="{{ asset('frontend/js/datedropper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/emojionearea.min.js') }}"></script>
    <script src="{{ asset('frontend/js/tooltipster.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.lazy.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
