<!-- Footer Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                <h5 class="text-light footer-head">شرکت برج افرازان شاهین گستر</h5>
                {{--                <a href="#" class="logo-footer">--}}
                {{--                    <img src="/assets/images/logo-light.png" height="24" alt="">--}}
                {{--                </a>--}}
                <p class="mt-4">با ما در ارتباط باشید</p>
                <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                    {{--                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook"--}}
                    {{--                                                                                                 class="fea icon-sm fea-social"></i></a>--}}
                    {{--                    </li>--}}
                    <li class="list-inline-item">
                        <a href="javascript:void(0)" class="rounded">
                            <i data-feather="instagram" class="fea icon-sm fea-social"></i>
                        </a>
                    </li>
                    {{--                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter"--}}
                    {{--                                                                                                 class="fea icon-sm fea-social"></i></a>--}}
                    {{--                    </li>--}}
                    <li class="list-inline-item">
                        <a href="javascript:void(0)" class="rounded">
                            <i data-feather="phone" class="fea icon-sm fea-social"></i>
                        </a>
                    </li>
                </ul><!--end icon-->
            </div><!--end col-->

            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-light footer-head">شرکت </h5>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> درباره
                            ما </a></li>
                    {{--                    <li><a href="page-services.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> خدمات--}}
                    {{--                        </a></li>--}}
                    <li><a href="" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> تیم </a>
                    </li>
                    {{--                    <li><a href="page-pricing.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> قیمت--}}
                    {{--                            گذاری </a></li>--}}
                    {{--                    <li><a href="page-portfolio-modern.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i>--}}
                    {{--                            پروژه </a></li>--}}
                    {{--                    <li><a href="page-jobs.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> مشاغل </a>--}}
                    {{--                    </li>--}}
                    <li><a href="{{route('blogs.all')}}" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> وبلاگ
                        </a></li>
                    {{--                    <li><a href="auth-cover-login.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> ورود--}}
                    {{--                        </a></li>--}}
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-light footer-head">لینک های مفید </h5>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> خدمات سایت
                        </a></li>
                    <li><a href="" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> حریم
                            خصوصی </a></li>
                    {{--                    <li><a href="documentation.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> مستند--}}
                    {{--                        </a></li>--}}
                    {{--                    <li><a href="changelog.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> تغییرات--}}
                    {{--                        </a></li>--}}
                    {{--                    <li><a href="components.html" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> اجزاء </a>--}}
                    {{--                    </li>--}}
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <h5 class="text-light footer-head">خبرنامه </h5>
                <p class="mt-4">ثبت نام کنید و آخرین نکات را از طریق ایمیل دریافت کنید.</p>
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="foot-subscribe mb-3">
                                <label class="form-label">ایمیل خود را بنویسید <span
                                        class="text-danger">*</span></label>
                                <div class="form-icon position-relative">
                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                    <input type="email" name="email" id="emailsubscribe"
                                           class="form-control ps-5 rounded" placeholder="ایمیل شما: " required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-grid">
                                <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary"
                                       value="خبرنامه">
                            </div>
                        </div>
                    </div>
                </form>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="d-flex align-items-center">
            <div class="text-sm-start">
                <p class="mb-0">©
                    <script>document.write(new Date().getFullYear())</script>
                    تمامی حقوق مادی و معنوی این سایت متعلق به
                    <a href="https://basgco.ir" target="_blank" class="text-reset text-decoration-underline">شرکت برج
                        افرازان شاهین گستر
                    </a>
                    می باشد
                </p>
            </div>

        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top">
    <i data-feather="arrow-up" class="icons"></i>
</a>
<!-- Back to top -->
