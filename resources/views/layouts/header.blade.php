<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="{{route('home')}}">
                <div class="l-dark text-dark">برج افرازان شاهین گستر</div>
                <div class="l-light text-white">برج افرازان شاهین گستر</div>

            </a>
        </div>
        <div class="buy-button">
            @auth
                <a href="{{route("admin.dashboard")}}">
                    <div class="btn btn-primary login-btn-primary">داشبورد</div>
                    <div class="btn btn-light login-btn-light">داشبورد</div>
                </a>
                <a href="{{route("logout")}}">
                    <div class="btn btn-primary login-btn-primary">خروج</div>
                    <div class="btn btn-light login-btn-light">خروج</div>
                </a>


            @else
                <a href="{{route("login")}}">
                    <div class="btn btn-primary login-btn-primary">ورود</div>
                    <div class="btn btn-light login-btn-light">ورود</div>
                </a>
            @endauth
        </div><!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li><a href="{{route("home")}}" class="sub-menu-item">صفحه اصلی </a></li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">محصولات</a>
                    <span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="javascript:void(0)" class="sub-menu-item">نرم افزار صورت وضعیت نویسی</a></li>
                    </ul>
                </li>


                <li><a href="{{route("blogs.all")}}" class="sub-menu-item">بلاگ</a></li>


                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">لینک های مفید</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="javascript:void(0)" class="sub-menu-item">در باره ما</a></li>
                        <li><a href="javascript:void(0)" class="sub-menu-item">تماس با ما</a></li>
                    </ul>
                </li>
            </ul><!--end navigation menu-->

        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
