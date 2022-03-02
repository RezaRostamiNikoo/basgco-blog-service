<?php

namespace App\Http\Livewire\Admin\Components;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePostForm extends Component
{
    use WithFileUploads;

    public function __construct($id = null)
    {
        parent::__construct($id);

        Category::all()->each(function ($cat) {
            array_push($this->allCategories, ['id' => $cat->id, 'title' => $cat->title]);
        });
        Tag::all()->each(function ($tag) {
            array_push($this->allTags, ['id' => $tag->id, 'title' => $tag->title]);
        });
    }

    public $allCategories = [];
    public $allTags = [];

    public $categories = [];
    public $tags = [];

    public $post;

    public $comment_status;
    public $parent_id;

    public $photo = null;

    protected $rules = [
        'post.title' => 'required',
        'post.sub_title' => 'required',
        'post.slug' => 'required',
        'post.meta_title' => 'required',
        'post.content' => 'required',
        'post.excerpt' => 'required',
    ];

    public function save()
    {

        $this->post->tags()->saveMany(Tag::all()->whereIn('id',$this->tags));

        $this->validate();
        $this->post->post_status = 'draft';
        $this->post->save();

        if ($this->photo != null)
            $this->post->addMedia($this->photo->getRealPath())->toMediaCollection('posts');
        $this->photo = null;

        $this->post->tags()->saveMany(Tag::all()->whereIn('id',$this->tags));
        $this->post->categories()->saveMany(Category::all()->whereIn('id',$this->categories));

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
