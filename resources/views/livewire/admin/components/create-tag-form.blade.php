<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">افزودن تگ جدید</h4>

                <form id="gradeCreate" wire:submit.prevent="submit" class="row align-items-center">
                    @csrf
                    <div class="col-sm-auto">
                        <div>
                            <label>عنوان</label>
                            <input wire:model.lazy="title" class="form-control"/>
                            @error('title') <span class="error">{{$message}}</span> @enderror
                        </div>
                    </div>

                    <div class="col-sm-auto">
                        <div>
                            <label>اسلاگ</label>
                            <input wire:model.lazy="slug" class="form-control"/>
                            @error('slug') <span class="error">{{$message}}</span> @enderror
                        </div>
                    </div>

                    <div class="col-sm-auto">
                        <div>
                            <label>عنوان متا</label>
                            <input wire:model.lazy="meta_title" class="form-control"/>
                            @error('meta_title') <span class="error">{{$message}}</span> @enderror
                        </div>
                    </div>

                    <div class="col-sm-auto">
                        <div>
                            <label>محتوای متا</label>
                            <input wire:model.lazy="content" class="form-control"/>
                            @error('content') <span class="error">{{$message}}</span> @enderror
                        </div>
                    </div>


                    <div class="col-sm-auto">
                        <button type="submit" class="btn btn-success">افزودن</button>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-nowrap mb-0 dataTable">
                        <thead>
                        <tr>
                            <th>عنوان</th>
                            <th>اسلاگ</th>
                            <th>عنوان متا</th>
                            <th>محتوای متا</th>
                            <th>تعداد پست ها</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $cat)
                            <tr>
                                <td>{{$cat->title}}</td>
                                <td>{{$cat->slug}}</td>
                                <td>{{$cat->meta_title}}</td>
                                <td>{{$cat->content}}</td>
                                <td>{{count($cat->posts)}}</td>
                                <td><button wire:click="delete({{$cat->id}})" class="btn btn-danger">حذف</button></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

