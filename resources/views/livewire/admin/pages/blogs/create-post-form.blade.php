@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
@endsection
<div class="card">
    <div class="card-header">
        <div class="row card-title">
            <div class="col-4 d-flex align-items-center">
                <h4 class="p-0 m-0">مقاله جدید</h4>
            </div>
            <div class="col-8 d-flex justify-content-end gap-2">
                <button class="btn btn-info" wire:click="save">ذخیره مقاله</button>
                @if($post->isPublished())
                    <button class="btn btn-warning" wire:click="unpublish">تغییر به حالت پیش نویس</button>
                    <button class="btn btn-info">پیش نمایش</button>
                @elseif($post->isPublishable())
                    <button class="btn btn-info" wire:click="publish">انتشار مقاله</button>
                    <button class="btn btn-info">پیش نمایش</button>
                @endif

            </div>
        </div>
    </div>
    <div class="card-body">


        <form wire:submit.prevent="submit">
            <div class="row flex-row-reverse">
                <div class="col-4 d-flex flex-column justify-content-start">
                    <div>
                        <label for="formFile" class="form-label">تصویر مقاله را انتخاب کنید</label>
                        <input wire:model="photo" class="form-control" type="file">
                        @error('photo')
                        <div class="error">{{$message}}</div>@enderror
                    </div>
                    <div class="w-100 my-3 position-relative">
                        <img class="w-100"
                             src="{{$photo ? $photo->temporaryUrl() : $post->getFirstMediaUrl('posts','thumbnail')}}">
                        @if($photo != null)
                            <p wire:click="deleteImage"
                               class="btn btn-close btn-lg position-absolute top-0 start-0 bg-danger"></p>@endif
                    </div>

                </div>
                <div class="col-8">
                    <div class="mb-3">
                        <label for="in1" class="form-label">عنوان مقاله</label>
                        <input wire:model.lazy="post.title" type="text" class="form-control" placeholder="عنوان مقاله">
                        @error('post.title')
                        <div class="error">{{$message}}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="in1" class="form-label">اسلاگ</label>
                        <input wire:model.lazy="post.slug" type="text" class="form-control" placeholder="اسلاگ"
                               data-toggle="tooltip" data-placement="bottom"
                               title='منظور از اسلاگ همان نامی است که در url نشان داده خواهد شد(معمولا به جای فاصله از خط تیره
                            استفاده می شود).
                            برای اسلاگ محدودیتی ازنظر فارسی یا انگلیسی بودن وجود ندارد و این امر بستگی به سیاست سئو
                            دارد.
                            به عنوان مثال عنوان "صورت وضعیت چیست؟" دارای
                        اسلاگی شبیه به "صورت-وضعیت-چیست؟" می باشد.'
                        >
                        @error('post.slug')
                        <div class="error">{{$message}}</div>@enderror
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="in1" class="form-label">عنوان متاتگ</label>
                            <input wire:model.lazy="post.meta_title" type="text" class="form-control"
                                   placeholder="عنوان متاتگ"
                                   data-toggle="tooltip" data-placement="bottom"
                                   title="همان متاتگیست که در اچ تی ام ال برای توصیح قرار میگیرد."
                            >
                            @error('post.meta_title')
                            <div class="error">{{$message}}</div>@enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">توضیح مختصر (excerpt)</label>
                            <input wire:model.lazy="post.excerpt" type="text" class="form-control"
                                   placeholder="محتوای متاتگ">
                            @error('post.excerpt')
                            <div class="error">{{$message}}</div>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">کتگوری</label>
                                <select wire:model.lazy="category" class="form-select">
                                    @if(!isset($category))
                                        <option value="" selected></option>
                                    @endif
                                    @foreach($allCategories as $cat)
                                        <option
                                            value="{{$cat['id']}}"
                                            {{$cat['id'] == $category ? 'selected' : ''}}>{{$cat['title']}}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                <div class="error">{{$message}}</div>@enderror
                            </div>
                            {{--                        {{$categories}}--}}
                        </div>
                        <div class="col-md-6" wire:ignore>
                            <div class="mb-3">
                                <label class="form-label">دسه بندی ها</label>
                                <select id="id_tag" class="select2 form-control select2-multiple" multiple="multiple">
                                    @foreach($allTags as $tag)
                                        <option value="{{$tag['id']}}">{{$tag['title']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @foreach($tags as $t)
                                {{$t}}
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>


            <div wire:ignore>
                <textarea id="blog-content" wire:model.lazy="post.content" name="area"></textarea>
            </div>
        </form>

    </div>
</div>
@section('script')

    <script src="{{ URL::asset('/admin/assets/libs/select2/select2.min.js') }}"></script>


    <!--tinymce js-->
    {{--        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>--}}
    <script src="/admin/assets/libs/tinymce/tinymce.min.js"></script>

    <!-- init js -->
    <script>
        $(document).ready(function () {
            0 < $("#blog-content").length && tinymce.init({
                selector: "textarea#blog-content",
                height: 500,
                path_absolute: '/',
                relative_urls: false,
                remove_script_host: false,
                document_base_url: '{{config('app.url')}}/',
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor",
                    'emoticons template paste textpattern imagetools help'
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [{
                    title: "در این قسمت استایل های دخیره می شود که برای نگارش کار راحت تر باشه. مثلا فرمت هدر رو اینجا ذخیره میکنیم که هرجا خواستیم هدر بنویسیم با یک کلیک استایل مورد نظر را بگیرد.",
                    inline: "b",

                }, {
                    title: "در حال تکمیل است. در این حین اگر استایلی مد نظرتان بود با ادمین درمیان بگذارید",
                    inline: "span",
                }],
                setup: function (editor) {
                    // editor.on('init change', function () {
                    //     editor.save();
                    // });
                    editor.on('blur', function (e) {
                    @this.set('post.content', editor.getContent());
                    });
                    editor.on('submit', function (e) {
                        e.preventDefautlt();
                        console.log("save");
                    // @this.set('post.content', editor.getContent());
                    });
                },
                init_instance_callback: function (editor) {
                    // editor.addShortcut("ctrl+s", "Custom Ctrl+S", "custom_ctrl_s");
                    // editor.addCommand("custom_ctrl_s", function(e) {
                    //     e.preventDefault();
                    //     alert("234");
                    //     /*
                    //     your custom codes
                    //     */
                    // });
                },
                file_picker_callback(callback, value, meta) {
                    let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
                    let y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight

                    tinymce.activeEditor.windowManager.openUrl({
                        url: '/file-manager/tinymce5',
                        title: 'Laravel File manager (Basgco)',
                        width: x * 0.8,
                        height: y * 0.8,
                        onMessage: (api, message) => {
                            callback(message.content, {text: message.text})
                        }
                    })
                }
            });

            // tinymce.activeEditor.uploadImages(function (success) {
            //     document.forms[0].submit();
            // });
        });

    </script>

    <script>
        var tags = $("#id_tag");

        tags.select2({
            dir: "rtl",
            placeholder: "دسته بندی",
        });

        tags.on("change", function (e) {
        @this.set('tags', $(tags).val());
        });
        // $(".select2-ajax").select2({
        //     ajax: {
        //         url: "https://api.github.com/search/repositories",
        //         dataType: "json",
        //         delay: 250,
        //         data: function data(e) {
        //             return {
        //                 q: e.term,
        //                 page: e.page
        //             };
        //         },
        //         processResults: function processResults(e, t) {
        //             return t.page = t.page || 1, {
        //                 results: e.items,
        //                 pagination: {
        //                     more: 30 * t.page < e.total_count
        //                 }
        //             };
        //         },
        //         cache: !0
        //     },
        //     placeholder: "Search for a repository",
        //     minimumInputLength: 1,
        //     templateResult: function templateResult(e) {
        //         if (e.loading) return e.text;
        //         var t = s("<div class='select2-result-repository clearfix'><div class='select2-result-repository__avatar'><img src='" + e.owner.avatar_url + "' /></div><div class='select2-result-repository__meta'><div class='select2-result-repository__title'></div><div class='select2-result-repository__description'></div><div class='select2-result-repository__statistics'><div class='select2-result-repository__forks'><i class='fa fa-flash'></i> </div><div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> </div><div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> </div></div></div></div>");
        //         return t.find(".select2-result-repository__title").text(e.full_name), t.find(".select2-result-repository__description").text(e.description), t.find(".select2-result-repository__forks").append(e.forks_count + " Forks"), t.find(".select2-result-repository__stargazers").append(e.stargazers_count + " Stars"), t.find(".select2-result-repository__watchers").append(e.watchers_count + " Watchers"), t;
        //     },
        //     templateSelection: function templateSelection(e) {
        //         return e.full_name || e.text;
        //     }
        // });


    </script>


@endsection
