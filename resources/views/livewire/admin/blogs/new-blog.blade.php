@section('title') @lang('translation.Form_Editors') @endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Forms @endslot
        @slot('title') Form Editors @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Tinymce wysihtml5</h4>
                    <p class="card-title-desc">Bootstrap-wysihtml5 is a javascript
                        plugin that makes it easy to create simple, beautiful wysiwyg editors
                        with the help of wysihtml5 and Twitter Bootstrap.</p>

                    <form method="post">
                        <textarea id="blog-content" name="area"></textarea>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')
    <!--tinymce js-->
    <script src="/admin/assets/libs/tinymce/tinymce.min.js"></script>

    <!-- init js -->
    <script src="/admin/assets/js/pages/blogs/new-blog.js"></script>
@endsection

