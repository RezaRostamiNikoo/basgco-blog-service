@extends('admin.layouts.master')
@section('title') @lang('translation.Form_Editors') @endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Forms @endslot
        @slot('title') Form Editors @endslot
    @endcomponent


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">مقاله جدید</h4>
                    <hr/>
                    <livewire:admin.components.create-post-form :post="$post"/>
                </div>
            </div>
        </div>
    </div>

    <!-- end row -->

@endsection


