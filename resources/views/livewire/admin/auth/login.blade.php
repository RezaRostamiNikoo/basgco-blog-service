@section('title')
    @lang('translation.Login') 2
@endsection

@section('css')

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ URL::asset('/admin/assets/libs/owl.carousel/owl.carousel.min.css') }}">

    <livewire:styles/>

@endsection

@section('body')

    <body class="auth-body-bg">
    @endsection

    @section('content')

        <form wire:submit.prevent="save" class="form-horizontal">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">{{$email}}ایمیل</label>
            <input name="email" type="email"
                   wire:model="email"
                   class="form-control @error('email') is-invalid @enderror"
                   id="username" placeholder="ایمیل خود را وارد کنید" autocomplete="email"
                   autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
            @enderror
        </div>
        <input wire:model="name" type="text" />
        <div class="mb-3">
            <div class="float-end">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                       class="text-muted">Forgot password?</a>
                @endif
            </div>
            <label class="form-label">رمز عبور</label>
            <div
                class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                <input type="password" name="password"
                       wire:model="password"
                       class="form-control  @error('password') is-invalid @enderror"
                       id="userpassword" value=""
                       placeholder="رمز را وارد کنید" aria-label="Password"
                       aria-describedby="password-addon"
                >
                <button class="btn btn-light " type="button"
                        id="password-addon"><i class="mdi mdi-eye-outline"></i>
                </button>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                @enderror
            </div>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox"
                   id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                مرا به خاطر بسپار
            </label>
        </div>

        <div class="mt-3 d-grid">
            <button class="btn btn-primary waves-effect waves-light"
                    type="submit">ورود
            </button>
        </div>

        <div class="mt-4 text-center">
            <h5 class="font-size-14 mb-3">ورود از طریق</h5>

            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#"
                       class="social-list-item bg-primary text-white border-primary">
                        <i class="mdi mdi-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#"
                       class="social-list-item bg-info text-white border-info">
                        <i class="mdi mdi-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#"
                       class="social-list-item bg-danger text-white border-danger">
                        <i class="mdi mdi-google"></i>
                    </a>
                </li>
            </ul>
        </div>
        </form>

    @endsection
    @section('script-bottom')

        <livewire:scripts/>


@endsection
