<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8"/>
    <title> @yield('title') | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('admin/assets/images/favicon.ico')}}">
    @include('admin.layouts.head-css')
    @livewireStyles
</head>

@yield('body')

@yield('content')

@include('admin.layouts.vendor-scripts')
@livewireScripts
</body>
</html>
