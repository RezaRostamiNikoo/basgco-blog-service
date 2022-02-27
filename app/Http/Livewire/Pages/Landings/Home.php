<?php

namespace App\Http\Livewire\Pages\Landings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public function render(Request $request)
    {
        return view('livewire.pages.landings.home')->layout('livewire.layouts.master');
    }
}
