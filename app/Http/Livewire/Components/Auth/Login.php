<?php

namespace App\Http\Livewire\Components\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        $this->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            Auth::login(User::where('email',$this->email)->first(),$this->remember);
            return $this->redirect(route('admin.dashboard'));
        }
    }

    public function render()
    {
        return view('livewire.components.auth.login');
    }
}
