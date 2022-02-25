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

                    <h4 class="card-title">مقاله مورد نظر را وارد کنید</h4>
                    <p class="card-title-desc">توضیحا در باره نوشتن مقاله</p>

                    <livewire:admin.components.create-post-form :post="$post"/>

    <!-- end row -->

@endsection
@section('script')
    <!--tinymce js-->
    {{--    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>--}}
    <script src="/admin/assets/libs/tinymce/tinymce.min.js"></script>

    <!-- init js -->
    <script src="/admin/assets/js/pages/blogs/new-blog.js"></script>

@endsection

