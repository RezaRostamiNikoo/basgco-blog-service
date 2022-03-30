<form class="login-form mt-4" wire:submit.prevent="submit">
    <input  type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="row">

        <div class="col-lg-12">
            <div class="mb-3">
                <label class="form-label">ایمیل شما <span
                        class="text-danger">*</span></label>
                <div class="form-icon position-relative">
                    <i data-feather="user" class="fea icon-sm icons"></i>
                    <input wire:model.lazy="email" type="email"
                           class="form-control ps-5 @error('email') is-invalid @enderror" placeholder="ایمیل">
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="mb-3">
                <label class="form-label">رمز عبور <span
                        class="text-danger">*</span></label>
                <div class="form-icon position-relative">
                    <i data-feather="key" class="fea icon-sm icons"></i>
                    <input wire:model.lazy="password" type="password"
                           class="form-control ps-5 @error('password') is-invalid @enderror" placeholder="رمز عبور ">
                    @error('password') <span class="error">{{ $message }}</span> @enderror </div>
            </div>
        </div>


        <div class="col-lg-12">
            <div class="d-flex justify-content-between">
                <div class="mb-3">
                    <div class="form-check">
                        <input wire:model.lazy="remember" class="form-check-input" type="checkbox">
                        <label class="form-check-label">مرا به خاطر بسپار </label>
                    </div>
                </div>
                <p class="forgot-pass mb-0">
                    <a href="" class="text-dark fw-bold">فراموشی رمز عبور؟ </a>
                </p>
            </div>
        </div>

        <div class="col-lg-12 mb-0">
            <div class="d-grid">
                <button class="btn btn-primary" type="submit">ورود</button>
            </div>
        </div><!--end col-->

        {{--        <div class="col-lg-12 mt-4 text-center">--}}
        {{--            <h6>یا با آن وارد شوید</h6>--}}
        {{--            <div class="row">--}}
        {{--                <div class="col-6 mt-3">--}}
        {{--                    <div class="d-grid">--}}
        {{--                        <a href="javascript:void(0)" class="btn btn-light"><i--}}
        {{--                                class="mdi mdi-facebook text-primary"></i> فیس بوک </a>--}}
        {{--                    </div>--}}
        {{--                </div><!--end col-->--}}

        {{--                <div class="col-6 mt-3">--}}
        {{--                    <div class="d-grid">--}}
        {{--                        <a href="javascript:void(0)" class="btn btn-light"><i--}}
        {{--                                class="mdi mdi-google text-danger"></i> گوگل </a>--}}
        {{--                    </div>--}}
        {{--                </div><!--end col-->--}}
        {{--            </div>--}}
        {{--        </div><!--end col-->--}}

        <div class="col-12 text-center">
            <p class="mb-0 mt-3"><small class="text-dark me-2">حسابی ندارید؟ </small> <a
                    href="auth-signup-three.html" class="text-dark fw-bold">ثبت نام
                    کنید </a>
            </p>
        </div><!--end col-->
    </div>
</form>



