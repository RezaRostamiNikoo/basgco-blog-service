@extends("layouts.master")

@section("title","بلاگ | برج افرازان شاهین گستر")

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
                                    <li class="breadcrumb-item"><a href="index.html">لنـدریـک </a></li>
                                    <li class="breadcrumb-item"><a href="#">صفحه </a></li>
                                    <li class="breadcrumb-item"><a href="#">وبلاگ </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">وبلاگ با سایدبار</li>
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

                <!-- START SIDEBAR -->
                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 sidebar sticky-bar rounded shadow">
                        <div class="card-body">
                            <!-- SEARCH -->
                            <div class="widget">
                                <form role="search" method="get">
                                    <div class="input-group mb-3 border rounded">
                                        <input type="text" id="s" name="s" class="form-control border-0"
                                               placeholder="جستجوی کلمه کلیدی...">
                                        <button type="submit" class="input-group-text bg-transparent border-0"
                                                id="searchsubmit"><i class="uil uil-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!-- SEARCH -->

                            <!-- Categories -->
                            <div class="widget mb-4 pb-2">
                                <h5 class="widget-title">دسته بندیها </h5>
                                <ul class="list-unstyled mt-4 mb-0 blog-categories">
                                    <li><a href="jvascript:void(0)">مالی </a> <span class="float-end">13</span></li>
                                    <li><a href="jvascript:void(0)">شرکتی </a> <span class="float-end">90 </span></li>
                                    <li><a href="jvascript:void(0)">وبلاگ </a> <span class="float-end">18</span></li>
                                    <li><a href="jvascript:void(0)">کسب و کار</a> <span class="float-end">20</span></li>
                                    <li><a href="jvascript:void(0)">سرمایه گذاری </a> <span class="float-end">22</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Categories -->

                            <!-- پست های اخیر -->
                            <div class="widget mb-4 pb-2">
                                <h5 class="widget-title">پست های اخیر</h5>
                                <div class="mt-4">
                                    <div class="clearfix post-recent">
                                        <div class="post-recent-thumb float-start"><a href="jvascript:void(0)"> <img
                                                    alt="img" src="images/blog/07.jpg" class="img-fluid rounded"></a>
                                        </div>
                                        <div class="post-recent-content float-start"><a href="jvascript:void(0)">مشاوره
                                                شرکتی </a><span class="text-muted mt-2">اردیبهشت 1400</span></div>
                                    </div>
                                    <div class="clearfix post-recent">
                                        <div class="post-recent-thumb float-start"><a href="jvascript:void(0)"> <img
                                                    alt="img" src="images/blog/08.jpg" class="img-fluid rounded"></a>
                                        </div>
                                        <div class="post-recent-content float-start"><a href="jvascript:void(0)">به
                                                تعادل باشکوه نگاه کنید</a> <span
                                                class="text-muted mt-2">اردیبهشت 1400</span></div>
                                    </div>
                                    <div class="clearfix post-recent">
                                        <div class="post-recent-thumb float-start"><a href="jvascript:void(0)"> <img
                                                    alt="img" src="images/blog/01.jpg" class="img-fluid rounded"></a>
                                        </div>
                                        <div class="post-recent-content float-start"><a href="jvascript:void(0)">تحقیقات
                                                مالی.</a> <span class="text-muted mt-2">اردیبهشت 1400</span></div>
                                    </div>
                                </div>
                            </div>
                            <!-- پست های اخیر -->

                            <!-- TAG CLOUDS -->
                            <div class="widget mb-4 pb-2">
                                <h5 class="widget-title">برچسب های ابری</h5>
                                <div class="tagcloud mt-4">
                                    <a href="jvascript:void(0)" class="rounded">کسب و کار </a>
                                    <a href="jvascript:void(0)" class="rounded">مالی </a>
                                    <a href="jvascript:void(0)" class="rounded">بازاریابی</a>
                                    <a href="jvascript:void(0)" class="rounded">مدل </a>
                                    <a href="jvascript:void(0)" class="rounded"> عروس </a>
                                    <a href="jvascript:void(0)" class="rounded">سبک زندگی </a>
                                    <a href="jvascript:void(0)" class="rounded">مسافرت </a>
                                    <a href="jvascript:void(0)" class="rounded">زیبایی </a>
                                    <a href="jvascript:void(0)" class="rounded">ویدئو </a>
                                    <a href="jvascript:void(0)" class="rounded">صدا </a>
                                </div>
                            </div>
                            <!-- TAG CLOUDS -->

                            <!-- SOCIAL -->
                            <div class="widget">
                                <h5 class="widget-title">دنبال کردن ما</h5>
                                <ul class="list-unstyled social-icon mb-0 mt-4">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                                data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                                </ul><!--end icon-->
                            </div>
                            <!-- SOCIAL -->
                        </div>
                    </div>
                </div><!--end col-->
                <!-- END SIDEBAR -->
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
