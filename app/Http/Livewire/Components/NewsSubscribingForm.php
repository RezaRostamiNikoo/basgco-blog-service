<?php

namespace App\Http\Livewire\Components;

use App\Mail\Subscribers\VerifyingMail;
use App\Models\NewsSubscriber;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class NewsSubscribingForm extends Component
{
    public $type;
    public $email;
    public $success_message = null;

    public function submit()
    {
        $this->success_message = null;
        $this->validate([
            'email' => 'required|email|unique:news_subscribers,email'
        ], [
            'required' => "ورود ایمیل الزامی می باشد.",
            'unique' => "این ایمیل قبلا در خبرنامه ثبت نام کرده است.",
            'email' => "فرمت ایمیل وارد شده صحیح نمی باشد."
        ]);
        $token = Str::random(50);
        NewsSubscriber::create([
            'email' => $this->email,
            'token' => $token
        ]);
        Mail::to($this->email)->send(new VerifyingMail($token));
        $this->success_message = "شما در خبرنامه عضو شدید لطفا برای تایید ایمیل خود به صندوق ایمیل ها دریافتی مراجعه کنید";


    }


    public function render()
    {
        return view('livewire.components.news-subscribing-form');
    }
}
