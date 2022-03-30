<!-- BLog Start -->
<div class="col-lg-8 col-md-6">
    <div class="row">
        @foreach($posts as $post)
            <div class="col-lg-6 col-md-12 mb-4 pb-2">
                <div class="card blog rounded border-0 shadow">
                    <div class="position-relative">
                        <img src="{{$post->getFirstMediaUrl('posts','thumbnail')}}" class="card-img-top rounded-top" alt="...">
                        <div class="overlay rounded-top bg-dark"></div>
                    </div>
                    <div class="card-body content">
                        <h5><a href="javascript:void(0)" class="card-title title text-dark">{{$post->title}}</a></h5>
                        <div class="post-meta d-flex justify-content-between mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                                                          class="text-muted like"><i
                                            class="uil uil-heart me-1"></i>33</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                                                class="text-muted comments"><i
                                            class="uil uil-comment me-1"></i>08</a></li>
                            </ul>
                            <a href="page-blog-detail.html" class="text-muted readmore">ادامه مطلب <i
                                    class="uil uil-angle-left-b align-middle"></i></a>
                        </div>
                    </div>
                    <div class="author">
                        <small class="text-light user d-block"><i class="uil uil-user"></i>{{$post->author->name}}
                        </small>
                        <small class="text-light date"><i class="uil uil-calendar-alt"></i> اردیبهشت
                            1400</small>
                    </div>
                </div>
            </div><!--end col-->
    @endforeach


    <!-- PAGINATION START -->
        <div class="col-12">
            <ul class="pagination justify-content-center mb-0">
                <li class="page-item"><a class="page-link" href="javascript:void(0)"
                                         aria-label="Previous">قبلی </a></li>
                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">بعدی </a>
                </li>
            </ul>
        </div><!--end col-->
        <!-- PAGINATION END -->
    </div><!--end row-->
</div><!--end col-->
<!-- BLog End -->
