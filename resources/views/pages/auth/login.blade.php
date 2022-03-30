@extends("layouts.master-without-header-and-footer")
@section('title',"صفحه ورود | برج افرازان شاهین گستر")

@section("last-styles")

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Icons -->
    <link href="/assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Main Css -->
    <link href="/assets/css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt"/>
    <link href="/assets/css/colors/default.css" rel="stylesheet" id="color-opt">

@endsection
@section("content")
    <div class="back-to-home rounded d-none d-sm-block">
        <a href="{{route("home")}}" class="btn btn-icon btn-primary"><i data-feather="home" class="icons"></i></a>
    </div>

    <!-- شوع آن -->
    <section class="bg-home bg-circle-gradiant d-flex align-items-center">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="card login-page bg-white shadow rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-center">ورود به حساب کاربری</h4>
                            <livewire:auth.login />
                        </div>
                    </div><!---->
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- پایان آن -->
@endsection





@section("last-scripts")

    <!-- javascript -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Icons -->
    <script src="/assets/js/feather.min.js"></script>
    <!-- Switcher -->
    <script src="/assets/js/switcher.js"></script>
    <!-- Main Js -->
    <script src="/assets/js/plugins.init.js"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="/assets/js/app.js"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->

@endsection
