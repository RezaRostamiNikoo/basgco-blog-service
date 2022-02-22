<?php

namespace App\Http\Livewire\Components\Baners;

use Illuminate\View\Component;

class Baner extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('livewire.components.baners.baner');
    }
}
