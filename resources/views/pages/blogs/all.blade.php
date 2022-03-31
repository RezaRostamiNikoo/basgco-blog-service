@extends("layouts.master")

@section("title","بلاگ | برج افرازان شاهین گستر")

@section("last-styles")
    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="/assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/css/line.css">
    <!-- Main Css -->
    <link href="/assets/css/style.min.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="/assets/css/colors/default.css" rel="stylesheet" id="color-opt">

@endsection

@section("content")


    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title"> وبلاگ </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="index.html">خانه</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">وبلاگ</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>  <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->
    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Blog Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <livewire:pages.blogs.all />

                <livewire:pages.blogs.sidebar.all />


            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Blog End -->

@endsection


@section("last-scripts")
    <!-- javascript -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Icons -->
    <script src="/assets/js/feather.min.js"></script>
    <!-- Switcher -->
    <script src="/assets/js/switcher.js"></script>
    <!-- Main Js -->
    <script
        src="/assets/js/plugins.init.js"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script
        src="/assets/js/app.js"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
@endsection
