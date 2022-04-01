<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function showLoginForm()
    {
        return view("pages.auth.login");
    }

    protected function guard()
    {
        if (isset(\request()->auth_guard)) {
            return Auth::guard(\request()->auth_guard);
        }
        return Auth::guard();
    }

}
