@extends('admin.layouts.master-without-nav')

@section('body')

    <body>
    @endsection

    @section('content')

        <div class="row">
            <div class="container">
                <a class="btn btn-info" href="{{route('admin.blogs.create').'?post_id='.$post->id}}">ویرایش مقاله</a>
            </div>
        </div>

        <div class="row">
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
