@extends('admin.layouts.master')
@section('title') لیست دسته بندی ها @endsection

@section('css')
    <!-- Plugins css -->
    <link href="{{ URL::asset('/assets/libs/bootstrap-editable/bootstrap-editable.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') دسته بندی ها @endslot
        @slot('title') لیست دسته بندی ها@endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12 col-lg-12">
                <livewire:admin.pages.categories.category-list />
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')

@endsection
