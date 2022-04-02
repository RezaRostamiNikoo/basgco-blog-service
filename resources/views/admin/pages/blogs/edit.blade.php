@extends('admin.layouts.master')
@section('title') @lang('translation.Form_Editors') @endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') پست ها @endslot
        @slot('title') پست جدید @endslot
    @endcomponent


    <div class="row">
        <div class="col-12">

                    <livewire:admin.pages.blogs.create-post-form :post="$post"/>


        </div>
    </div>

    <!-- end row -->

@endsection


