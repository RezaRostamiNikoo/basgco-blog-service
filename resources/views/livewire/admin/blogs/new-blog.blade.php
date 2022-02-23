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

                    <livewire:admin.components.create-post-form />

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')

@endsection

