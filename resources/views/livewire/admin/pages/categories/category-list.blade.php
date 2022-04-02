<div class="row">
    <div class="col-12 col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">افزودن دسته بندی جدید</h4>
            </div>
            <div class="card-body">


                <form id="gradeCreate" wire:submit.prevent="submit" class="row align-items-stretch">
                    @csrf
                    <div class="col-md-6">
                        <div>
                            <label>عنوان</label>
                            <input wire:model.lazy="title" class="form-control"/>
                            @error('title') <span class="error">{{$message}}</span> @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <label>اسلاگ</label>
                            <input wire:model.lazy="slug" class="form-control"/>
                            @error('slug') <span class="error">{{$message}}</span> @enderror
                            <small class="form-text text-danger">
                                منظور از اسلاگ همان نامی است که در url نشان داده خواهد شد(معمولا به جای فاصله از خط تیره
                                استفاده می شود).
                                برای اسلاگ محدودیتی ازنظر فارسی یا انگلیسی بودن وجود ندارد و این امر بستگی به سیاست سئو
                                دارد.
                                به عنوان مثال دسته بندی <strong style="font-size: 120%">"نرم افزار"</strong> دارای
                                اسلاگی شبیه به <strong style="font-size: 120%">"نرم-افزار"</strong> می باشد.
                            </small>
                        </div>
                    </div>
                    <hr/>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">افزودن</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">لیست دسته بندی ها</h4>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">هشدار!</h4>
                        <p>
                            به منظور موارد امنیتی امکان اصلاح هیچیک از ردیف ها و یا حذف ردیف های دارای پست وجود ندارد.
                        </p>
                        <hr>
                        <p class="mb-0">
                            برای رفع مشکلات احتمالی با <strong>ادمین</strong> هماهنگ کنید
                        </p>
                    </div>
                    <table class="table table-striped table-nowrap mb-0 dataTable">
                        <thead>
                        <tr>
                            <th>عنوان</th>
                            <th>اسلاگ</th>
                            <th>تعداد پست ها</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $cat)
                            <tr>
                                <td>{{$cat->title}}</td>
                                <td>{{$cat->slug}}</td>
                                <td>{{count($cat->posts)}}</td>
                                <td>
                                    @if(!count($cat->posts))
                                        <button wire:click="delete({{$cat->id}})" class="btn btn-danger">حذف</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

