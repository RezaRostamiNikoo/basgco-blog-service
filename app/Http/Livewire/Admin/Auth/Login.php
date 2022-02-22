<?php

namespace App\Http\Livewire\Admin\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email = "rezarostaminikoo@gmail.com";
    public $password = "password";
    public $text = "hamid";

    


    public function render()
    {
        return view('livewire.admin.auth.login')->layout('admin.layouts.master-without-nav');
    }
}
