<div>

    <form wire:submit.prevent="save">
        @csrf
        <div>
            <label for="formFile" class="form-label">تصویر مقاله را انتخاب کنید</label>
            <input wire:model="media" class="form-control" type="file" placeholder="شسیشسی">
        </div>
{{--        @error('media') <span class="error">{{ $message }}</span> @enderror--}}
{{--        <div wire:loading wire:target="media">Uploading...</div>--}}


        @if ($media)
            Photo Preview:
            <img class="w-100" src="{{ '' }}">
        @endif
        <button type="submit">آپلود</button>
        {{ \App\Models\Post::find(4)->getFirstMedia() }}
    </form>

</div>
