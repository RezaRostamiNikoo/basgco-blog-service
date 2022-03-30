<?php

namespace App\Http\Livewire\Components\Header;

use Livewire\Component;

class Header extends Component
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
        return view('livewire.layouts.header.header');
    }
}
