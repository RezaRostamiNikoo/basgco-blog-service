<div>
    @if($type == 'type-1')

        <div class="text-center subcribe-form">
            <form wire:submit.prevent="submit">
                <input wire:model.lazy="email" class="form-control rounded-pill" placeholder="ایمیل شما">
                <button class="btn btn-pills btn-primary submitBnt">عضویت در خبرنامه</button>
            </form>
        </div>
    @elseif($type == 'type-footer')
        <form wire:submit.prevent="submit">
            <div class="row">
                <div class="col-lg-12">
                    <div class="foot-subscribe mb-3">
                        <label class="form-label">ایمیل خود را بنویسید <span
                                class="text-danger">*</span></label>
                        <div class="form-icon position-relative">
                            <i data-feather="mail" class="fea icon-sm icons"></i>
                            <input wire:model.lazy="email" class="form-control ps-5 rounded"
                                   placeholder="ایمیل شما: ">

                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="d-grid">
                        <button class="btn btn-soft-primary">خبرنامه</button>
                    </div>
                </div>
            </div>
        </form>
    @endif

    @if(isset($success_message))
        <div class="alert alert-success alert-dismissible fade show mt-4 pr-5 font-size-16" role="alert">
            <strong>ایمیل شما با موفقیت ثبت شد!</strong> لطفا با مراجعه به صندوق ایمیل های دریافتی ایمیل خود را تایید
            کنید
            <button type="button" class="close bg-transparent border-0 float-start" data-dismiss="alert"
                    aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @error('email')
    <div class="alert alert-danger alert-dismissible fade show mt-4 pr-5 font-size-16" role="alert">
        <strong>ایمیل!</strong> {{$message}}
        <button type="button" class="close bg-transparent border-0 float-start" data-dismiss="alert"
                aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    @enderror
</div>
