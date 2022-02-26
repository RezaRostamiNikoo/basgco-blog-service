<?php

namespace App\Http\Livewire\Admin\Components;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePostForm extends Component
{
    use WithFileUploads;

    public $post;

    public $comment_status;
    public $post_status;

    public $parent_id;
    public $author_id;

    public $published_at;


    public $photo = null;

    protected $rules = [
        'post.title' => 'required',
        'post.sub_title' => 'required',
        'post.slug' => 'required',
        'post.meta_title' => 'required',
        'post.content' => 'required',
        'post.excerpt' => 'required',
        'photo' => 'image|max:1024'
    ];

    public function save()
    {
        $this->validate();
        $this->post->post_status = 'draft';
        $this->post->save();

        if ($this->photo != null)
            $this->post->addMedia($this->photo->getRealPath())->toMediaCollection('posts');
        $this->photo = null;
    }

    public function publish()
    {
        $this->validate();
        $this->post->post_status = 'published';
        $this->post->published_at = Carbon::now();
        $this->post->save();
        if ($this->photo != null)
            $this->post->addMedia($this->photo->getRealPath())->toMediaCollection('posts');
        $this->photo = null;
    }

    public function submit()
    {

    }

    public function deleteImage()
    {
        File::delete($this->photo->getRealPath());
        $this->photo = null;
    }

    public function render()
    {
        return view('livewire.admin.components.create-post-form');
    }
}
