<?php

namespace App\Http\Livewire\Admin\Tags;

use Livewire\Component;

class CreateTag extends Component
{
    public function render()
    {
        return view('livewire.admin.tags.create-tag')->layout('admin.layouts.master');
    }
}
