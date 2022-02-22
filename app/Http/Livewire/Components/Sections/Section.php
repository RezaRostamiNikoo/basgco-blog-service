<?php

namespace App\Http\Livewire\Components\Sections;

use Illuminate\View\Component;

class Section extends Component
{

    public $title;
    public function __construct($title)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.components.sections.section');
    }
}
