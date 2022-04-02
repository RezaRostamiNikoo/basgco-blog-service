<?php

namespace App\Http\Livewire\Admin\Pages\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoryList extends Component
{
    public $title ='';
    public $slug='';



    public function mount($title = '', $slug = '')
    {
        $this->title = $title;
        $this->slug = $slug;
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required|unique:categories,title',
            'slug' => 'required|unique:categories,slug',
        ]);

        $result = Category::create([
            'title' => $this->title,
            'slug' => $this->slug,
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
        return view('livewire.admin.pages.categories.category-list', compact('categories'));
    }
}
