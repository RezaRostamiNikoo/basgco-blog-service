<?php

namespace App\Http\Livewire\Admin\Components;

use App\Models\Category;
use Livewire\Component;

class CreateCategoryForm extends Component
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

        $result = Category::create([
            'title' => $this->title,
            'meta_title' => $this->meta_title,
            'slug' => $this->slug,
            'content' => $this->content,
        ]);
        $this->reset();
    }

    public function delete(Category $category)
    {
        $category->delete();
    }


    public function render()
    {
        $categories = Category::with('posts')->get();
        return view('livewire.admin.components.create-category-form', compact('categories'));
    }
}
