@extends('layouts.master')

@section('title') @lang('translation.Icon_Sidebar') @endsection

@section('body')

<body data-sidebar="dark" data-keep-enlarged="true" class="vertical-collpsed">
    @endsection

    @section('content')

    @component('components.breadcrumb')
    @slot('li_1') Layouts @endslot
    @slot('title') Icon Sidebar @endslot
    @endcomponent



    @endsection
    @section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    @endsection