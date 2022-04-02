@extends('admin.layouts.master')
@section('title') @lang('translation.Blog_List') @endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') @lang('translation.Blog') @endslot
        @slot('title') @lang('translation.Blog_List') @endslot
    @endcomponent


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
