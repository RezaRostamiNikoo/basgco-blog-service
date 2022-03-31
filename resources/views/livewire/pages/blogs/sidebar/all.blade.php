<!-- START SIDEBAR -->
<div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
    <div class="card border-0 sidebar sticky-bar rounded shadow">
        <div class="card-body">
            <!-- SEARCH -->
            <div class="widget">
                <form role="search" method="get">
                    <div class="input-group mb-3 border rounded">
                        <input type="text" id="s" name="s" class="form-control border-0"
                               placeholder="جستجوی کلمه کلیدی...">
                        <button type="submit" class="input-group-text bg-transparent border-0"
                                id="searchsubmit"><i class="uil uil-search"></i></button>
                    </div>
                </form>
            </div>
            <!-- SEARCH -->

            <!-- Categories -->
            <div class="widget mb-4 pb-2">
                <h5 class="widget-title">دسته بندیها </h5>
                <ul class="list-unstyled mt-4 mb-0 blog-categories">
                    @foreach($categories as $cat)
                        <li>
                            <a href="jvascript:void(0)">{{$cat->title}}</a>
                            <span class="float-end">{{$cat->posts_count}}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- Categories -->

            <!-- پست های اخیر -->
            <div class="widget mb-4 pb-2">
                <h5 class="widget-title">پست های اخیر</h5>
                <div class="mt-4">
                    @foreach($posts as $post)
                        <div class="clearfix post-recent">
                            <div class="post-recent-thumb float-start">
                                <a href="jvascript:void(0)">
                                    <img alt="{{$post->title}}" src="{{$post->getFirstMediaUrl('posts','thumbnail')}}"
                                         class="img-fluid rounded"
                                         style="aspect-ratio:3 / 2 !important;overflow: hidden"></a>
                            </div>
                            <div class="post-recent-content float-start">
                                <a href="jvascript:void(0)">{{$post->title}}</a>
                                <span class="text-muted mt-2">
                                    {{\Morilog\Jalali\Jalalian::forge($post->created_at)->format('%d  %B %Y')}}
                                </span>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
            <!-- پست های اخیر -->

            <!-- TAG CLOUDS -->
            <div class="widget mb-4 pb-2">
                <h5 class="widget-title">برچسب های ابری</h5>
                <div class="tagcloud mt-4">
                    @foreach($tags as $tag)
                        <a href="jvascript:void(0)" class="rounded">{{$tag->title}}</a>
                    @endforeach
                </div>
            </div>
            <!-- TAG CLOUDS -->

{{--            <!-- SOCIAL -->--}}
{{--            <div class="widget">--}}
{{--                <h5 class="widget-title">دنبال کردن ما</h5>--}}
{{--                <ul class="list-unstyled social-icon mb-0 mt-4">--}}
{{--                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i--}}
{{--                                data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>--}}
{{--                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i--}}
{{--                                data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>--}}
{{--                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i--}}
{{--                                data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>--}}
{{--                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i--}}
{{--                                data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>--}}
{{--                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i--}}
{{--                                data-feather="github" class="fea icon-sm fea-social"></i></a></li>--}}
{{--                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i--}}
{{--                                data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>--}}
{{--                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i--}}
{{--                                data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>--}}
{{--                </ul><!--end icon-->--}}
{{--            </div>--}}
{{--            <!-- SOCIAL -->--}}
        </div>
    </div>
</div><!--end col-->
<!-- END SIDEBAR -->
