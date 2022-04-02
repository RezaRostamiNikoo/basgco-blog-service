<?php

namespace App\Http\Livewire\Components;

use App\Mail\Subscribers\VerifyingMail;
use App\Models\NewsSubscriber;
use App\Traits\WithRateLimiter;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class NewsSubscribingForm extends Component
{
    use WithRateLimiter;

    public $type;
    public $email;
    public $success_message = null;

    public function submit()
    {
//        $this->rateLimit(5,60,"news-subscribing");
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
//        Mail::to($this->email)->queue(new VerifyingMail($token));
        $this->success_message = "ایمیل شما با موفقیت در خبرنامه بسگکو ثبت شد.";


    }


    public function render()
    {
        return view('livewire.components.news-subscribing-form');
    }
}
