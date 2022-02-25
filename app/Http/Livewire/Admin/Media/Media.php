<?php

namespace App\Http\Livewire\Admin\Media;

use Livewire\Component;

class Media extends Component
{
    public function render()
    {
        return view('livewire.admin.media.media')->layout('admin.layouts.master');
    }
}
