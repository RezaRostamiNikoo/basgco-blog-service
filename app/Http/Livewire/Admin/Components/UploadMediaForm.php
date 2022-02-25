<?php

namespace App\Http\Livewire\Admin\Components;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadMediaForm extends Component
{
    use WithFileUploads;

    public $model;          // post , user , other models
    public $media;          // media variable that holds the file information
    public $progress;       // the progress of uploading
    public $isUploading;    // if any file is uploading

    public function mount($model = null, $media = null, $progress = 0, $isUploading = false)
    {
        $this->model = $model;
        $this->media = $media;
        $this->progress = $progress;
        $this->isUploading = $isUploading;

    }


    public function save()
    {
        Post::find(4)->addMedia($this->media->getRealPath())->toMediaCollection('posts');
    }

    public function render()
    {

        return view('livewire.admin.components.upload-media-form');

    }
}
