<?php

namespace App\Http\Livewire\Pages\Auth;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.pages.auth.login')->layout('admin.layouts.master-without-nav');
    }
}
