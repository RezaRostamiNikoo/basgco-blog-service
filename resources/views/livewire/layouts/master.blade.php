<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8"/>
    <title> @yield('title') | شرکت برج افرازان شاهین گستر</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('favicon.png') }}">
    <link href="{{ URL::asset('/assets/css/app.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css"/>

    <livewire:styles/>
</head>

<body>
<div>
<livewire:components.header.header />

<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div>
    @yield('content')
    <!-- container-fluid -->
        <!-- End Page-content -->
        @include('livewire.layouts.footer')
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->


<!-- JAVASCRIPT -->
@include('livewire.layouts.vendor-scripts')
<livewire:scripts/>

</body>

</html>
