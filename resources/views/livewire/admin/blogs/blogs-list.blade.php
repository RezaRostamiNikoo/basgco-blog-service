@section('title') @lang('translation.Blog_List') @endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') @lang('translation.Blog') @endslot
        @slot('title') @lang('translation.Blog_List') @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-9 col-lg-8">
            <div class="card">


                <!-- Tab panes -->
                <div class="tab-content p-4">
                    <div class="tab-pane active" id="all-post" role="tabpanel">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div>
                                        @foreach($blogs as $blog)
                                            <div>
                                                <h5>
                                                    <div vclass="text-dark">{{$blog->title}}</div>
                                                    <div class="text-muted">{{$blog->sub_title}}</div>
                                                </h5>
                                                <p class="text-muted">{{jdate($blog->created_at)}}</p>
                                                <div class="row">
                                                    <div class="col-12 col-md-2">
                                                        <div class="position-relative mb-3">
                                                            <img
                                                                src="{{ $blog->getFirstMediaUrl('posts','thumbnail') }}"
                                                                alt="" class="img-thumbnail">
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="col-12 col-md-10 d-flex flex-column justify-content-between">
                                                        <p>{{ \Illuminate\Support\Str::limit($blog->excerpt,200)}}</p>
                                                        <div class="d-flex flex-row-reverse justify-content-between">
                                                            <a href="{{route('ssssss',['categoryslug'=> count($blog->categories) ? $blog->categories[0]->slug : 'sdsd','blogslug'=> $blog->slug])}}"
                                                               class="text-primary d-flex justify-content-end">بیشتر
                                                                بخوانید <i
                                                                    class="mdi mdi-arrow-left"></i>
                                                            </a>
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item me-3">
                                                                    <a href="#" class="text-muted d-flex">
                                                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                                        @foreach($blog->categories as $cat)
                                                                            <p> {{$cat->title}}</p>
                                                                        @endforeach
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item me-3">
                                                                    <a href="#" class="text-muted">
                                                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i>
                                                                        12
                                                                        کامنت
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="my-2">
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="archive" role="tabpanel">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <h5>آرشیو</h5>

                                    <div class="mt-5">
                                        <div class="d-flex flex-wrap">
                                            <div class="me-2">
                                                <h4>2020</h4>
                                            </div>
                                            <div class="ms-auto">
                                                <span
                                                    class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">03</span>
                                            </div>
                                        </div>
                                        <hr class="mt-2">

                                        <div class="list-group list-group-flush">
                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Beautiful Day with
                                                Friends</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Drawing a sketch</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Project discussion with team</a>

                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <div class="d-flex flex-wrap">
                                            <div class="me-2">
                                                <h4>2019</h4>
                                            </div>
                                            <div class="ms-auto">
                                                <span
                                                    class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">06</span>
                                            </div>
                                        </div>
                                        <hr class="mt-2">

                                        <div class="list-group list-group-flush">
                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Coffee with Friends</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Neque porro quisquam est</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Quis autem vel eum iure</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Cras mi eu turpis</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Drawing a sketch</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Project discussion with team</a>

                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <div class="d-flex flex-wrap">
                                            <div class="me-2">
                                                <h4>2018</h4>
                                            </div>
                                            <div class="ms-auto">
                                                <span
                                                    class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">03</span>
                                            </div>
                                        </div>
                                        <hr class="mt-2">

                                        <div class="list-group list-group-flush">
                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Beautiful Day with
                                                Friends</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Drawing a sketch</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                    class="mdi mdi-circle-medium me-1"></i> Project discussion with team</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="card-body p-4">
                    <div class="search-box">
                        <p class="text-muted">Search</p>
                        <div class="position-relative">
                            <input type="text" class="form-control rounded bg-light border-light"
                                   placeholder="Search...">
                            <i class="mdi mdi-magnify search-icon"></i>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div>
                        <p class="text-muted">Categories</p>

                        <ul class="list-unstyled fw-medium">
                            <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i>
                                    Design</a></li>
                            <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i>
                                    Development <span
                                        class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">04</span></a>
                            </li>
                            <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i>
                                    Business</a></li>
                            <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i>
                                    Project</a></li>
                            <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i>
                                    Travel<span
                                        class="badge badge-soft-success rounded-pill ms-1 float-end font-size-12">12</span></a>
                            </li>
                        </ul>
                    </div>

                    <hr class="my-4">

                    <div>
                        <p class="text-muted">Archive</p>

                        <ul class="list-unstyled fw-medium">
                            <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i>
                                    2020
                                    <span
                                        class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">03</span></a>
                            </li>
                            <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i>
                                    2019
                                    <span
                                        class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">06</span></a>
                            </li>
                            <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i>
                                    2018
                                    <span
                                        class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">05</span></a>
                            </li>
                        </ul>
                    </div>

                    <hr class="my-4">

                    <div>
                        <p class="text-muted mb-2">Popular Posts</p>

                        <div class="list-group list-group-flush">

                            <a href="javascript: void(0);" class="list-group-item text-muted py-3 px-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="assets/images/small/img-7.jpg" alt=""
                                             class="avatar-md h-auto d-block rounded">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 text-truncate">Beautiful Day with Friends</h5>
                                        <p class="mb-0 text-truncate">10 Apr, 2020</p>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item text-muted py-3 px-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="assets/images/small/img-4.jpg" alt=""
                                             class="avatar-md h-auto d-block rounded">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 text-truncate">Drawing a sketch</h5>
                                        <p class="mb-0 text-truncate">24 Mar, 2020</p>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item text-muted py-3 px-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="assets/images/small/img-6.jpg" alt=""
                                             class="avatar-md h-auto d-block rounded">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 text-truncate">Project discussion with team</h5>
                                        <p class="mb-0 text-truncate">11 Mar, 2020</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div>
                        <p class="text-muted">Tags</p>

                        <div class="d-flex flex-wrap gap-2 widget-tag">
                            <div><a href="#" class="badge bg-light font-size-12">Design</a></div>
                            <div><a href="#" class="badge bg-light font-size-12">Development</a></div>
                            <div><a href="#" class="badge bg-light font-size-12">Business</a></div>
                            <div><a href="#" class="badge bg-light font-size-12">Project</a></div>
                            <div><a href="#" class="badge bg-light font-size-12">Travel</a></div>
                            <div><a href="#" class="badge bg-light font-size-12">Lifestyle</a></div>
                            <div><a href="#" class="badge bg-light font-size-12">Photography</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
    <!-- Plugins js -->
    <script src="{{ URL::asset('/admin/assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{asset('/admin/assets/libs/ckeditor/build/ckeditor.js')}}"></script>
    <script src="{{asset('/admin/assets/libs/ckeditor/build/samples/js/sample.js')}}"></script>
    <script src="{{ URL::asset('/admin/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>

    <script type="text/javascript">
        initSample();
        $(function () {

            $('.select2').select2();

            $("input[name='published']").TouchSpin({
                min: 1390,
                max: 1401,
                step: 1,
                buttondown_class: "btn btn-primary",
                buttonup_class: "btn btn-primary"
            });

            $("input:radio[name=type]").change(function () {
                let type = $(this).val();

                if (type == 'question')
                    $('.options').addClass('d-none');
                else {
                    $('.options').removeClass('d-none');
                }
            });

            $('.as_level').hide();
            $("input:radio[name=assessment]").change(function () {
                let assessment = $(this).val();
                if (assessment == 1)
                    $('.as_level').show();
                else {
                    $('.as_level').hide();
                }
            });

            $("#gradefield").change(function () {
                $.ajax({
                    url: "{{-- route('admin.book.getbooks') --}}?field_id=" + $(this).children("option:selected").val(),
                    method: 'GET',
                    success: function (data) {
                        $('#book').html(data.books).trigger('change');
                    }
                });
            });

            $("#examGradeField").change(function () {
                $.ajax({
                    url: "{{-- route('admin.book.getbooks') --}}?field_id=" + $(this).children("option:selected").val(),
                    method: 'GET',
                    success: function (data) {
                        $('#exam').html(data.exams);
                    }
                });
            });

            $("#book").change(function () {
                $.ajax({
                    url: "{{-- route('admin.context.content.parents') --}}?book_id=" + $(this).val(),
                    method: 'GET',
                    success: function (data) {
                        $('#season').html(data.data);
                        $('#season').trigger('change');
                    }
                });


            });

            $("#season").change(function () {
                $.ajax({
                    url: "{{-- route('admin.context.content.childs') --}}?season_id=" + $(this).val(),
                    method: 'GET',
                    success: function (data) {
                        $('#lesson').html(data.data);
                        $('#lesson').trigger('change');
                    }
                });
            });

            $("#lesson").change(function () {
                $.ajax({
                    url: "{{-- route('admin.context.package.getpackages') --}}?lesson_id=" + $(this).val(),
                    method: 'GET',
                    success: function (data) {
                        $('#package').html(data.html);
                    }
                });
            });

            $('form').on('submit', function (e) {
                e.preventDefault();
                var $input = $(this).find("input[name=correct]");
                // Value is falsey (i.e. null), lets set a new one
                $input.val($input.attr('id'));
                $('form').unbind('submit').submit();
            });

            $('#addNew').on('click', function (e) {
                e.preventDefault();
                $("small.text-danger").text('');
                for (instance in CKEDITOR.instances)
                    CKEDITOR.instances[instance].updateElement();
                $.ajax({
                    type: 'POST',
                    url: '{{--route('admin.question.store')--}}',
                    data: $('form').serialize(),
                    success: function (data) {
                        if (data !== '') {
                            toastr.success(data.success);
                            for (instance in CKEDITOR.instances)
                                CKEDITOR.instances[instance].setData('');
                        }
                    }, error: function (errors) {

                        var msg = '';
                        if (errors) { //ajax error, errors = xhr object
                            var response = JSON.parse(errors.responseText);
                            $.each(response.errors, function (key, val) {
                                $("#" + key).addClass('alert-danger');
                                $("#" + key + '_error').text(val[0]);
                            });
                        }
                    }
                });
            })

        })
    </script>

@endsection
