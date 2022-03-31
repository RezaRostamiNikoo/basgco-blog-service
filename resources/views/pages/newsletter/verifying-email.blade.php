@extends('layouts.master')


@section("title","صفحه تایید ایمیل خبرنامه | بسگکو")

@section('last-styles')
    <style>
        header{
            background-color: #202942!important;
        }
        header.nav-sticky{
            background-color: white!important;

        }
    </style>

@endsection
@section('content')
    <div style="margin-top: 10rem">
        <div class="container">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">تبریک!</h4>
                <p>ایمیل شما با موفقیت تایید شد.</p>
                <hr>
                <p class="mb-0"></p>
            </div>
        </div>
    </div>
@endSection

@section('last-scripts')

@endsection

