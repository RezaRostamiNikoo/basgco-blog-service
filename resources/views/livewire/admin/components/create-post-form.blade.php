<div>
    <div class="row">
        <div class="col-12">
            <button class="btn btn-info" wire:click="save">ذخیره مقاله</button>
            <button class="btn btn-info" wire:click="publish">انتشار مقاله</button>
            <button class="btn btn-info">پیش نمایش</button>
        </div>
    </div>

    <form wire:submit.prevent="submit">


        <hr/>
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
                    <input wire:model.lazy="post.slug" type="text" class="form-control" placeholder="اسلاگ">
                    @error('post.slug')
                    <div class="error">{{$message}}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="in1" class="form-label">زیر عنوان (subtitle)</label>
                    <input wire:model.lazy="post.sub_title" type="text" class="form-control" placeholder="زیرعنوان">
                    @error('post.sub_title')
                    <div class="error">{{$message}}</div>@enderror
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="in1" class="form-label">عنوان متاتگ</label>
                        <input wire:model.lazy="post.meta_title" type="text" class="form-control"
                               placeholder="عنوان متاتگ">
                        @error('post.meta_title')
                        <div class="error">{{$message}}</div>@enderror
                    </div>
                    <div class="col-6">
                        <label class="form-label">توضیح مختصر (excerpt)</label>
                        <input wire:model.lazy="post.excerpt" type="text" class="form-control"
                               placeholder="محتوای متاتگ">
                        @error('post.excerpt')
                        <div class="error">{{$message}}</div>@enderror
                    </div>
                </div>
            </div>

        </div>

        <div wire:ignore>
            <textarea id="blog-content" wire:model.lazy="post.content" name="area"></textarea>
        </div>
    </form>

</div>
@section('script')
    <!--tinymce js-->
    {{--    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>--}}
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
                    title: "هدر اول",
                    inline: "b",

                }, {
                    title: "متن",
                    inline: "span",
                    styles: {
                        color: "#ff0000",
                    }
                }, {
                    title: "Red header",
                    block: "h1",
                    styles: {
                        color: "#ff0000"
                    }
                }, {
                    title: "Example 1",
                    inline: "span",
                    classes: "example1"
                }, {
                    title: "Example 2",
                    inline: "span",
                    classes: "example2"
                }, {
                    title: "Table styles"
                }, {
                    title: "Table row 1",
                    selector: "tr",
                    classes: "tablerow1"
                }],
                setup: function (editor) {
                    // editor.on('init change', function () {
                    //     editor.save();
                    // });
                    editor.on('blur', function (e) {
                    @this.set('post.content', editor.getContent());
                    });
                },
            });

            tinymce.activeEditor.uploadImages(function (success) {
                document.forms[0].submit();
            });
        });

    </script>

@endsection
