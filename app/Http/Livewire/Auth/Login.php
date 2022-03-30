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
        $request = Request::create('/login', 'POST', array_merge($data, ['_token' => csrf_token()]));
        return app()->handle($request);
//        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
//            Auth::login(User::where('email', $this->email)->first(), $this->remember);
//            return $this->redirect(route('admin.dashboard'));
//        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
