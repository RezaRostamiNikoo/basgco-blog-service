<!-- BLog Start -->
<div class="col-lg-8 col-md-6">
    <div class="row">
        @foreach($posts as $post)
            <div class="col-lg-6 col-md-12 mb-4 pb-2">
                <div class="card blog rounded border-0 shadow">
                    <div class="position-relative" style="aspect-ratio: 3 / 2 !important;overflow: hidden;">
                        <img src="{{$post->getFirstMediaUrl('posts','thumbnail')}}" class="card-img-top rounded-top"
                             alt="{{$post->title}}">
                        <div class="overlay rounded-top bg-dark"></div>
                    </div>
                    <div class="card-body content">
                        <h5>
                            <a href="/blog/{{$post->slug}}" class="card-title title text-dark">
                                {{$post->title}}
                            </a>
                        </h5>
                        <div class="post-meta d-flex justify-content-between mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item me-2 mb-0">
                                    <a href="javascript:void(0)" class="text-muted like">
                                        <i class="uil uil-heart me-1"></i>
                                        33
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class="text-muted comments">
                                        <i class="uil uil-comment me-1"></i>
                                        08
                                    </a>
                                </li>
                            </ul>
                            <a href="/blog/{{$post->slug}}" class="text-muted readmore">
                                ادامه مطلب
                                <i class="uil uil-angle-left-b align-middle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="author">
                        <small class="text-light user d-block"><i class="uil uil-user"></i>{{$post->author->name}}
                        </small>
                        <small class="text-light date">
                            <i class="uil uil-calendar-alt"></i>
                            {{\Morilog\Jalali\Jalalian::forge($post->created_at)->format('%d  %B %Y')}}
                        </small>
                    </div>
                </div>
            </div><!--end col-->
        @endforeach
        {{ $posts->links('layouts.pagination.bootstrap-4') }}


    </div><!--end row-->
</div><!--end col-->
<!-- BLog End -->
