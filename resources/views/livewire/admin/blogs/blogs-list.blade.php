@section('title') @lang('translation.Blog_List') @endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') @lang('translation.Blog') @endslot
        @slot('title') @lang('translation.Blog_List') @endslot
    @endcomponent
    <form id="addquestionFrom" action="" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <div id="toolbarTop"></div>
                        <div class="col-12 mb-2"><label for="title">عنوان سوال:</label>
                            <div class="col-md-12">
                                <textarea name="title"
                                          class="editor form-control @error('title') 'text-danger' @enderror"
                                          id="editor" contenteditable="true">
                                    <p>صورت سوال را اینجا وارد کنید</p>
                                </textarea>
                            </div>
                            <small class="text-danger" id="title_error"></small>

                            @error('title')
                            <div class="py-1 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if(app('request')->input('type') !== 'question')
                            <h3 class="mt-4 mb-2">گزینه ها: </h3>
                            <div id="options">
                                <div class="row options">
                                    <div class="col-12 col-sm-6 form-group mb-3">
                                        <label class="col-6 option-label">گزینه 1:</label>
                                        <input type="hidden" class="option-id" value="1">
                                        <textarea name="answer[1]" contenteditable="true" id="editor1"
                                                  class="editor form-control  @error('description') 'text-danger' @enderror"
                                                  rows="5"
                                                  placeholder="وارد کردن توضیحات ...">{{old('description')}}</textarea>
                                        <small class="text-danger" id="answer_error"></small>

                                    </div>
                                    <div class="col-12 col-sm-6 form-group mb-3">
                                        <label class="col-6 option-label">گزینه 2:</label>
                                        <input type="hidden" class="option-id" value="1">
                                        <textarea name="answer[2]" contenteditable="true" id="editor2"
                                                  class="editor form-control  @error('description') 'text-danger' @enderror"
                                                  rows="5"
                                                  placeholder="وارد کردن توضیحات ...">{{old('description')}}</textarea>
                                    </div>
                                    <div class="col-12 col-sm-6 form-group mb-3">
                                        <label class="col-6 option-label">گزینه 3:</label>
                                        <input type="hidden" class="option-id" value="1">
                                        <textarea name="answer[3]" contenteditable="true" id="editor3"
                                                  class="editor form-control  @error('description') 'text-danger' @enderror"
                                                  rows="5"
                                                  placeholder="وارد کردن توضیحات ...">{{old('description')}}</textarea>
                                    </div>
                                    <div class="col-12 col-sm-6 form-group mb-3">
                                        <label class="col-6 option-label">گزینه 4:</label>
                                        <input type="hidden" class="option-id" value="1">
                                        <textarea name="answer[4]" id="editor4"
                                                  class="editor form-control  @error('description') 'text-danger' @enderror"
                                                  rows="5"
                                                  placeholder="وارد کردن توضیحات ...">{{old('description')}}</textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-auto mb-3 options" id="">
                                <label for="" class="col-12 @error('correct') 'text-danger' @enderror">گزینه
                                    صحیح</label>
                                <div class="btn-group mt-2 mt-xl-0" role="group"
                                     aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="correct" value="1"
                                           id="1" {{old('correct') == 1? 'checked="checked"': ''}} required>
                                    <label class="btn btn-outline-success" for="1">گزینه 1</label>

                                    <input type="radio" class="btn-check" name="correct" value="2"
                                           id="2" {{old('correct') == 2? 'checked="checked"': ''}} required>
                                    <label class="btn btn-outline-success" for="2">گزینه 2</label>

                                    <input type="radio" class="btn-check" name="correct" value="3"
                                           id="3" {{old('correct') == 3? 'checked="checked"': ''}} required>
                                    <label class="btn btn-outline-success" for="3">گزینه 3</label>

                                    <input type="radio" class="btn-check" name="correct" value="4"
                                           id="4" {{old('correct') == 4? 'checked="checked"': ''}} required>
                                    <label class="btn btn-outline-success" for="4">گزینه 4</label>

                                </div>
                                @error('correct')
                                <div class="py-1 text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        @endif
                        <div class="col-12 my-2"><label for="help">پاسخ تشریحی:</label>
                            <div class="col-md-12">
                                    <textarea name="help" required
                                              class="form-control @error('rahnama') 'text-danger' @enderror"
                                              placeholder="">{{old('rahnama')}}</textarea>
                            </div>
                            <small class="text-danger" id="rahnama_error"></small>

                            @error('rahnama')
                            <div class="py-1 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="card">
                    <div class="card-body">

                        <div class="justify-content-center  my-3 row">
                            <div class="col-sm-auto p-1">
                                <button id="addNew" type="submit" class="btn btn-success"> ذخیره و جدید</button>
                            </div>

                            <div class="col-sm-auto p-1">
                                <button type="submit" class="btn btn-outline-success">ذخیره و بستن</button>
                            </div>
                            <div class="col-sm-auto p-1">
                                <a href="{{--route('admin.question.index')--}}"
                                   class="btn btn-outline-danger">انصراف</a>
                            </div>
                        </div>
                        <hr/>
                        <div class="mb-3 row">
                            <div class="col-12 mb-3">
                                <label for="type" class="col-12">نوع سوال</label>
                                <div class="btn-group mt-2 mt-xl-0" role="group"
                                     aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="type" value="test"
                                           id="test" {{old('type') !== "question" ? 'checked="checked"': ''}} >
                                    <label class="btn btn-outline-info" for="test">تستی</label>

                                    <input type="radio" class="btn-check" name="type" value="question"
                                           id="question" {{old('type') == "question"? 'checked="checked"': ''}}>
                                    <label class="btn btn-outline-info" for="question">تشریحی</label>
                                </div>
                                @error('type')
                                <div class="py-1 text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label col-12" for="source">منبع سوال:</label>

                                    <select name="source" id="source"
                                            class="form-select @error('source') 'text-danger' @enderror"
                                            required="required">
                                        <option value="sarasari" {{old('source') == "sarasari" ? "selected" : ''}}>
                                            سراسری داخلی
                                        </option>
                                        <option value="khareji" {{old('source') == "khareji" ? "selected": ''}}>سراسری
                                            خارجی
                                        </option>
                                        <option value="talifi" {{old('source') == "talifi" ? "selected": ''}}>تالیفی
                                        </option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label col-12" for="published">سال انتشار:</label>
                                    <input data-toggle="touchspin" class="@error('published') 'alert-danger' @enderror"
                                           type="text" min="1390" value="{{old('published')}}" name="published">
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="editor">مولف</label>
                                <select class="form-select select2" id="teacher_id" name="teacher_id">
                                    <option value="" selected></option>
                                    {{--                                @foreach($teachers as $teacher)--}}
                                    {{--                                    <option value="{{$teacher->id}}">{{$teacher->name}} {{$teacher->last_name}}</option>--}}
                                    {{--                                @endforeach--}}
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="editor">ویرایستار</label>
                                <input type="text" class="form-control @error('editor') 'alert-danger' @enderror"
                                       value="{{old('editor')}}" name="editor">
                            </div>
                            <div class="col-12">
                                <label for="subject">مبحث</label>
                                <input type="text" class="form-control @error('subject') 'alert-danger' @enderror"
                                       value="{{old('subject')}}" name="subject">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body row">
                        <h4 class="card-title"></h4>
                        <p class="card-title-desc">برای نمایش سوال در بسته ها یا آزمون ها ، بسته یا آزمون های موردنظر را
                            انتخاب کنید</p>
                        <div class="accordion" id="relations">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="bsheading">
                                    <button class="accordion-button fw-medium" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#bscollapse"
                                            aria-expanded="true" aria-controls="bscollapse">
                                        <span class="d-none d-sm-block"><i
                                                class="bx bx-cube me-3"></i>ارتباط با بسته</span>
                                    </button>
                                </h2>
                                <div id="bscollapse" class="accordion-collapse collapse show"
                                     aria-labelledby="bsheading" data-bs-parent="#relations" style="">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-sm-4 col-md-3 col-lg-2 col-12 mb-3 form-group">
                                                <label for="gradefield" class="col-12">انتخاب رشته:</label>
                                                <select class="form-select select2" id="gradefield"
                                                        name="field_id" required>
                                                    <option value="" selected>----</option>
                                                    {{--                                                @foreach($grades as $grade)--}}
                                                    {{--                                                    @foreach($grade->fields as $field)--}}
                                                    {{--                                                        <option--}}
                                                    {{--                                                            value="{{$field->id}}">{{$grade->name . " -> " . $field->name}}</option>--}}
                                                    {{--                                                    @endforeach--}}
                                                    {{--                                                @endforeach--}}
                                                </select>
                                            </div>
                                            <div class="col-sm-4 col-md-3 col-lg-2 col-12 mb-3 form-group">
                                                <label for="book_id" class="col-12">کتاب:</label>
                                                <select name="book_id" id="book" required="required"
                                                        class="form-control select2  @error('book_id') 'text-danger' @enderror"
                                                        style="width: 100%">
                                                    <option value="" selected="selected" disabled>---
                                                    </option>

                                                </select>
                                                <small class="text-danger" id="book_id_error"></small>

                                                @error('book_id')
                                                <div class="py-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div
                                                class="col-sm-4 col-md-3 col-lg-2 col-12 mb-3 form-group  @error('season_id') 'text-danger' @enderror">
                                                <label for="season" class="col-12">فصل:</label>

                                                <select id="season" class="form-control select2"
                                                        style="width: 100%">
                                                    <option value="" selected="selected" disabled>---
                                                    </option>
                                                </select>
                                                @error('season')
                                                <div class="py-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div
                                                class="col-sm-4 col-md-3 col-lg-3 col-12 mb-3 form-group  @error('season_id') 'text-danger' @enderror">
                                                <label class="col-12">درس:</label>
                                                <select id="lesson" class="form-control select2"
                                                        style="width: 100%">
                                                    <option value="" selected="selected" disabled>---
                                                    </option>
                                                </select>
                                                @error('lesson')
                                                <div class="py-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div
                                                class="col-sm-4 col-md-3 col-lg-3 col-12 mb-3 form-group  @error('package_id') 'text-danger' @enderror">
                                                <label for="package_id" class="col-12">بسته:</label>
                                                <select name="package_id" id="package"
                                                        class="form-control select2" style="width: 100%">
                                                    <option value="" selected="selected" disabled>ابتدا درس
                                                        را انتخاب کنید
                                                    </option>
                                                </select>
                                                @error('package_id')
                                                <div class="py-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-6 mb-3">
                                                <label for="status" class="col-12">وضعیت سوال</label>
                                                <div class="btn-group mt-2 mt-xl-0" role="group"
                                                     aria-label="Basic radio toggle button group">
                                                    <input type="radio" class="btn-check" name="bs_status"
                                                           value="0"
                                                           id="status0" {{old('status') == ("0" || '') ? 'checked="checked"': ''}} >
                                                    <label class="btn btn-outline-warning" for="status0">پیش
                                                        نویس</label>
                                                    <input type="radio" class="btn-check" name="bs_status"
                                                           value="1"
                                                           id="status1" {{old('status') == "1" ? 'checked="checked"': ''}} >
                                                    <label class="btn btn-outline-success"
                                                           for="status1">منتشرشده</label>
                                                    <input type="radio" class="btn-check" name="bs_status"
                                                           value="2"
                                                           id="status2" {{old('status') == "2" ? 'checked="checked"': ''}} >
                                                    <label class="btn btn-outline-danger" for="status2">منتشر
                                                        نشده</label>

                                                </div>
                                                @error('status')
                                                <div class="py-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-2 mb-3">
                                                <label class="col-12">سوال ارزیابی سامانه</label>
                                                <div class="btn-group mt-2 mt-xl-0" role="group"
                                                     aria-label="Basic radio toggle button group">
                                                    <input type="radio" class="btn-check" name="assessment"
                                                           value="1"
                                                           id="yes" {{old('assessment') == "1"  ? 'checked="checked"': ''}} >
                                                    <label class="btn btn-outline-success"
                                                           for="yes">بله</label>

                                                    <input type="radio" class="btn-check" name="assessment"
                                                           value="0"
                                                           id="no" {{old('assessment') !== "1"? 'checked="checked"': ''}}>
                                                    <label class="btn btn-outline-danger"
                                                           for="no">خیر</label>

                                                </div>

                                                @error('type')
                                                <div class="py-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-2 mb-3">
                                                <label for="level" class="col-12">سطح سوال</label>
                                                <div class="btn-group mt-2 mt-xl-0" role="group"
                                                     aria-label="Basic radio toggle button group">

                                                    <input type="radio" class="btn-check as_level" name="bs_level"
                                                           value="teaching"
                                                           id="t" {{old('level') == "teaching"? 'checked="checked"': ''}}>
                                                    <label class="btn btn-outline-success as_level" for="t">درسنامه</label>

                                                    <input type="radio" class="btn-check as_level" name="bs_level"
                                                           value="descriptive"
                                                           id="d" {{old('level') == "descriptive"? 'checked="checked"': ''}}>
                                                    <label class="btn btn-outline-success as_level" for="d">تشریحی</label>

                                                    <input type="radio" class="btn-check" name="bs_level"
                                                           value="beginner"
                                                           id="m" {{old('level') !== "beginner" ? 'checked="checked"': ''}} >
                                                    <label class="btn btn-outline-success" for="m">مقدماتی</label>

                                                    <input type="radio" class="btn-check" name="bs_level"
                                                           value="advanced"
                                                           id="p" {{old('level') == "advanced"? 'checked="checked"': ''}}>
                                                    <label class="btn btn-outline-success" for="p">پیشرفته</label>

                                                </div>
                                                @error('level')
                                                <div class="py-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="asheading">
                                    <button class="accordion-button fw-medium" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#ascollapse"
                                            aria-expanded="true" aria-controls="ascollapse">
                                                      <span class="d-none d-sm-block"><i
                                                              class="bx bx-check-square me-3"></i>ارتباط با آزمون</span>
                                    </button>
                                </h2>
                                <div id="ascollapse" class="accordion-collapse collapse"
                                     aria-labelledby="asheading" data-bs-parent="#relations" style="">
                                    <div class="accordion-body">


                                        <div class="row">
                                            <div class="col-sm-4 col-md-3 col-12 mb-3 form-group">
                                                <label for="asgradefield" class="col-12">انتخاب رشته:</label>
                                                <select class="form-select select2 w-100" id="examGradeField" style="width: 100%">
                                                    <option value="" selected disabled>انتخاب رشته:</option>
                                                    {{--                                                @foreach($grades as $grade)--}}
                                                    {{--                                                    @foreach($grade->fields as $field)--}}
                                                    {{--                                                        <option--}}
                                                    {{--                                                            value="{{$field->id}}">{{$grade->name . " -> " . $field->name}}</option>--}}
                                                    {{--                                                    @endforeach--}}
                                                    {{--                                                @endforeach--}}
                                                </select>
                                            </div>
                                            <div
                                                class="col-sm-4 col-md-3 col-12 mb-3 col-lg-2 form-group @error('exam_id') 'text-danger' @enderror">
                                                <label for="exam_id" class="col-12">شماره آزمون:</label>
                                                <select name="exam_id" id="exam"
                                                        class="form-control select2  @error('exam_id') 'text-danger' @enderror" style="width: 100%">
                                                    <option value="" selected="selected" disabled>---
                                                    </option>
                                                    {{--                                                @foreach(\App\Models\exam::all() as $exam)--}}
                                                    {{--                                                    <option--}}
                                                    {{--                                                        value="{{ $exam->id }}" {{old('exam_id') == $exam->id ? 'selected' : ''}}>--}}
                                                    {{--                                                        {{ $exam->number }}--}}
                                                    {{--                                                    </option>--}}
                                                    {{--                                                @endforeach--}}
                                                </select>
                                                <small class="text-danger" id="exam_id_error"></small>

                                                @error('exam_id')
                                                <div class="py-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-6 mb-3">
                                                <label for="status" class="col-12">وضعیت سوال</label>
                                                <div class="btn-group mt-2 mt-xl-0" role="group"
                                                     aria-label="Basic radio toggle button group">
                                                    <input type="radio" class="btn-check" name="as_status"
                                                           value="0"
                                                           id="as_status0" {{old('status') == ("0" || '') ? 'checked="checked"': ''}} >
                                                    <label class="btn btn-outline-warning" for="as_status0">پیش
                                                        نویس</label>
                                                    <input type="radio" class="btn-check" name="as_status"
                                                           value="1"
                                                           id="as_status1" {{old('status') == "1" ? 'checked="checked"': ''}} >
                                                    <label class="btn btn-outline-success"
                                                           for="as_status1">منتشرشده</label>
                                                    <input type="radio" class="btn-check" name="as_status"
                                                           value="2"
                                                           id="as_status2" {{old('status') == "2" ? 'checked="checked"': ''}} >
                                                    <label class="btn btn-outline-danger" for="as_status2">منتشر
                                                        نشده</label>

                                                </div>
                                                @error('status')
                                                <div class="py-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-sm-4 col-md-2 col-6 mb-3">
                                                <label for="level" class="col-12">سطح سوال</label>
                                                <div class="btn-group mt-2 mt-xl-0" role="group"
                                                     aria-label="Basic radio toggle button group">
                                                    <input type="radio" class="btn-check" name="as_level"
                                                           value="beginner"
                                                           id="as_level_m" {{old('level') !== "beginner" ? 'checked="checked"': ''}} >
                                                    <label class="btn btn-outline-info"
                                                           for="as_level_m">مقدماتی</label>

                                                    <input type="radio" class="btn-check" name="as_level"
                                                           value="advanced"
                                                           id="as_level_p" {{old('level') == "advanced"? 'checked="checked"': ''}}>
                                                    <label class="btn btn-outline-success"
                                                           for="as_level_p">پیشرفته</label>

                                                </div>
                                                @error('level')
                                                <div class="py-1 text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
    <div class="row">
        <div class="col-xl-9 col-lg-8">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom justify-content-center pt-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#all-post" role="tab">
                            All Post
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#archive" role="tab">
                            Archive
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-4">
                    <div class="tab-pane active" id="all-post" role="tabpanel">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <div>
                                                    <h5 class="mb-0">Blog List</h5>
                                                </div>
                                            </div>

                                            <div class="col-8">
                                                <div>
                                                    <ul class="nav nav-pills justify-content-end">
                                                        <li class="nav-item">
                                                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">View :</a>
                                                        </li>
                                                        <li class="nav-item" data-bs-placement="top" title="List">
                                                            <a class="nav-link active" href="blog-list">
                                                                <i class="mdi mdi-format-list-bulleted"></i>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item" data-bs-placement="top" title="Grid">
                                                            <a class="nav-link" href="blog-grid">
                                                                <i class="mdi mdi-view-grid-outline"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <hr class="mb-4">

                                        @foreach($blogs as $blog)
                                            <div>
                                                <h5><a href="blog-details" class="text-dark">{{$blog->title}}</a>
                                                </h5>
                                                <p class="text-muted">{{jdate($blog->created_at)}}</p>

                                                <div class="position-relative mb-3">
                                                    <img src="{{ URL::asset('/admin/assets/images/small/img-2.jpg') }}" alt="" class="img-thumbnail">
                                                </div>

                                                <ul class="list-inline">
                                                    <li class="list-inline-item me-3">
                                                        <a href="#" class="text-muted">
                                                            <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                            Project
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item me-3">
                                                        <a href="#" class="text-muted">
                                                            <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 12
                                                            Comments
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>{{$blog->content}}</p>

                                                <div>
                                                    <a href="#" class="text-primary">بیشتر بخوانید <i class="mdi mdi-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        @endforeach
                                        <hr class="my-5">

                                        <div>
                                            <h5><a href="blog-details" class="text-dark">Project discussion with
                                                    team</a></h5>
                                            <p class="text-muted">24 Mar, 2020</p>

                                            <div class="position-relative mb-3">
                                                <img src="{{ URL::asset('/admin/assets/images/small/img-6.jpg') }}" alt="" class="img-thumbnail">

                                                <div class="blog-play-icon">
                                                    <a href="javascript: void(0);" class="avatar-sm d-block mx-auto">
                                                        <span class="avatar-title rounded-circle font-size-18"><i class="mdi mdi-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>

                                            <ul class="list-inline">
                                                <li class="list-inline-item me-3">
                                                    <a href="#" class="text-muted">
                                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                        Development
                                                    </a>
                                                </li>
                                                <li class="list-inline-item me-3">
                                                    <a href="#" class="text-muted">
                                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 08
                                                        Comments
                                                    </a>
                                                </li>
                                            </ul>

                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                                praesentium voluptatum deleniti atque corrupti quos dolores similique sunt
                                                in culpa qui officia deserunt mollitia animi est</p>

                                            <div>
                                                <a href="#" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                                            </div>
                                        </div>

                                        <hr class="my-5">

                                        <div class="text-center">
                                            <ul class="pagination justify-content-center pagination-rounded">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">...</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">10</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
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
                                                <span class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">03</span>
                                            </div>
                                        </div>
                                        <hr class="mt-2">

                                        <div class="list-group list-group-flush">
                                            <a href="blog-details" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Beautiful Day with Friends</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Drawing a sketch</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Project discussion with team</a>

                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <div class="d-flex flex-wrap">
                                            <div class="me-2">
                                                <h4>2019</h4>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">06</span>
                                            </div>
                                        </div>
                                        <hr class="mt-2">

                                        <div class="list-group list-group-flush">
                                            <a href="blog-details" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Coffee with Friends</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Neque porro quisquam est</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Quis autem vel eum iure</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Cras mi eu turpis</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Drawing a sketch</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Project discussion with team</a>

                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <div class="d-flex flex-wrap">
                                            <div class="me-2">
                                                <h4>2018</h4>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">03</span>
                                            </div>
                                        </div>
                                        <hr class="mt-2">

                                        <div class="list-group list-group-flush">
                                            <a href="blog-details" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Beautiful Day with Friends</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Drawing a sketch</a>

                                            <a href="blog-details" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Project discussion with team</a>

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
                            <input type="text" class="form-control rounded bg-light border-light" placeholder="Search...">
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
                                    Development <span class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">04</span></a>
                            </li>
                            <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i>
                                    Business</a></li>
                            <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i>
                                    Project</a></li>
                            <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i>
                                    Travel<span class="badge badge-soft-success rounded-pill ms-1 float-end font-size-12">12</span></a>
                            </li>
                        </ul>
                    </div>

                    <hr class="my-4">

                    <div>
                        <p class="text-muted">Archive</p>

                        <ul class="list-unstyled fw-medium">
                            <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> 2020
                                    <span class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">03</span></a>
                            </li>
                            <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> 2019
                                    <span class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">06</span></a>
                            </li>
                            <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> 2018
                                    <span class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">05</span></a>
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
                                        <img src="assets/images/small/img-7.jpg" alt="" class="avatar-md h-auto d-block rounded">
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
                                        <img src="assets/images/small/img-4.jpg" alt="" class="avatar-md h-auto d-block rounded">
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
                                        <img src="assets/images/small/img-6.jpg" alt="" class="avatar-md h-auto d-block rounded">
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
