<?php

namespace App\Http\Livewire\Auth;

use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $remember;


    public function boot()
    {
        $this->remember = old('remember');
    }


    public function mount($email = '', $password = '', $remember = false)
    {

        $this->email = $email;
        $this->password = $password;
        $this->remember = $remember;

    }

    public function submit()
    {
        $data = $this->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $request = Request::create(route('login'), 'POST', array_merge($data, ['_token' => csrf_token()]));
        return app()->handle($request);

    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
