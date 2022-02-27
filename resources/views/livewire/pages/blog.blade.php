@extends('admin.layouts.master-without-nav')

@section('body')

    <body>
    @endsection

    @section('content')

        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row">
                   {{$post->title}}
                </div>
                <div class="row">
                    {!! $post->content !!}
                </div>
            </div>
        </div>

@endsection
