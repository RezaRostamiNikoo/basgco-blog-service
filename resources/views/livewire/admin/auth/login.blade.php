<form class="form-horizontal" wire:submit.prevent="submit">
    @csrf

    <div class="mb-3">
        <label for="username" class="form-label">ایمیل</label>
        <input wire:model.lazy="email" type="email" class="form-control @error('email') is-invalid @enderror"
               placeholder="ایمیل را وارد کنید ..." autocomplete="email" autofocus>
        @error('email') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="mb-3">
        <div class="float-end">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-muted">فراموشی رمز?</a>
            @endif
        </div>
        <label class="form-label">کلمه عبور</label>
        <div class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
            <input wire:model.lazy="password" type="password" class="form-control  @error('password') is-invalid @enderror"
                   placeholder="رمز عبور را وارد کنید" aria-label="Password" aria-describedby="password-addon">
            <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i>
            </button>
            @error('password') <span class="error">{{ $message }}</span> @enderror

        </div>
    </div>

    <div class="form-check">
        <input wire:model.lazy="remember" class="form-check-input" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
            به خاطر بسپار
        </label>
    </div>

    <div class="mt-3 d-grid">
        <button class="btn btn-primary waves-effect waves-light" type="submit">ورود</button>
    </div>

    <div class="mt-4 text-center">
        <h5 class="font-size-14 mb-3">ورود با اکانت گوگل</h5>

        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#" class="social-list-item bg-primary text-white border-primary">
                    <i class="mdi mdi-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="social-list-item bg-info text-white border-info">
                    <i class="mdi mdi-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="social-list-item bg-danger text-white border-danger">
                    <i class="mdi mdi-google"></i>
                </a>
            </li>
        </ul>
    </div>
</form>
