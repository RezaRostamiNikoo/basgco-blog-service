@section('title') @lang('translation.grade') @endsection

@section('css')
    <!-- Plugins css -->
    <link href="{{ URL::asset('/assets/libs/bootstrap-editable/bootstrap-editable.min.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('content')

<livewire:admin.components.create-category-form />

@endsection
