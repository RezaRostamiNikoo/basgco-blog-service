@extends("layouts.master-without-header-and-footer")
@section('title',"صفحه ورود | برج افرازان شاهین گستر")

@section("last-styles")

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


