<?php

namespace App\Http\Livewire\Admin\Components;

use App\Models\Tag;
use Livewire\Component;

class CreateTagForm extends Component
{
    public $title ='';
    public $meta_title='';
    public $slug='';
    public $content='';


    public function mount($title = '', $slug = '', $meta_title = '', $content = '')
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->meta_title = $meta_title;
        $this->content = $content;
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required|unique:categories,title',
            'meta_title' => 'required',
            'slug' => 'required|unique:categories,slug',
            'content' => 'required',
        ]);

        $result = Tag::create([
            'title' => $this->title,
            'meta_title' => $this->meta_title,
            'slug' => $this->slug,
            'content' => $this->content,
        ]);
        $this->reset();
    }

    public function delete(Tag $tag)
    {
        $tag->delete();
    }

    public function render()
    {
        $tags = Tag::with('posts')->get();
        return view('livewire.admin.components.create-tag-form',compact('tags'));
    }
}
