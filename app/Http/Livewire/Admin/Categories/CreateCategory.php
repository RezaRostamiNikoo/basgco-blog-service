<?php

namespace App\Http\Livewire\Admin\Categories;

use Livewire\Component;

class CreateCategory extends Component
{
    public function render()
    {
        return view('livewire.admin.categories.create-category')->layout('admin.layouts.master');
    }
}
