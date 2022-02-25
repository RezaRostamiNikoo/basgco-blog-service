<form wire:submit.prevent="submit">

    <div class="row">
        <div class="col-8">
            <div class="mb-3">
                <label for="in1" class="form-label">عنوان مقاله</label>
                <input wire:model.lazy="$title" type="text" class="form-control" id="in1" placeholder="عنوان مقاله">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please select a valid state.</div>
            </div>
            <div class="mb-3">
                <label for="in1" class="form-label">اسلاگ</label>
                <input wire:model.lazy="$slug" type="text" class="form-control" id="in1" placeholder="عنوان مقاله">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please select a valid state.</div>
            </div>
            <div class="mb-3">
                <label for="in1" class="form-label">زیر عنوان (subtitle)</label>
                <input wire:model.lazy="$sub_title" type="text" class="form-control" id="in1" placeholder="عنوان مقاله">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please select a valid state.</div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <label for="in1" class="form-label">عنوان متاتگ</label>
                    <input wire:model.lazy="$meta_title" type="text" class="form-control" id="in1"
                           placeholder="عنوان متاتگ">
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please select a valid state.</div>
                </div>
                <div class="col-6">
                    <label for="in1" class="form-label">توضیح مختصر (excerpt)</label>
                    <input wire:model.lazy="$excerpt" type="text" class="form-control" id="in1"
                           placeholder="محتوای متاتگ">
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please select a valid state.</div>
                </div>

            </div>
        </div>
        <div class="col-4">
            <livewire:admin.components.upload-media-form :model="'{{\App\Models\Post::class}}'" />
        </div>
    </div>


    content
    image_url
    post_status
    comment_status
    published_at
    parent_id


    title
    <input wire:model.lazy="$title">
    sub_title
    <input wire:model.lazy="$title">
    slug
    <input wire:model.lazy="$title">

    <input wire:model.lazy="$title">
    <input wire:model.lazy="$title">
    <input wire:model.lazy="$title">
    <textarea id="blog-content" name="area"></textarea>
</form>

<label for="validationCustom01" class="form-label">First name</label>
<input type="text" class="form-control" id="validationCustom01" placeholder="First name"
       value="Mark" required>
<div class="valid-feedback">
    Looks good!
</div>
<div class="invalid-feedback">
    Please select a valid state.
</div>
