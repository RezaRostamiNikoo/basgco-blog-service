<?php

namespace App\Mail\Subscribers;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "تایید ایمیل عضویت در خبرنامه";
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function build()
    {
        return $this->view('mails.subscribers.verifying-email');
    }
}
