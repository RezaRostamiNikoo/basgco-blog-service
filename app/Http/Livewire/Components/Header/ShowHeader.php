<?php

namespace App\Http\Livewire\Components\Header;

use Livewire\Component;

class ShowHeader extends Component
{
    public $items = [
        'خانه',
        'بلاگ',
        'راه حل ها',
        'تماس با ما',
        'در باره ما',
    ];
    public function render()
    {
        return view('livewire.components.header.show-header');
    }
}
