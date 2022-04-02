<?php


namespace App\Traits;


use Jantinnerezo\LivewireAlert\LivewireAlert;

trait WithSweetAlert
{
    use LivewireAlert;


    public function alert_success($title, $text)
    {
        $this->alert('success', $title, [
            'position' => 'center',
            'timer' => 5000,
            'toast' => false,
            'text' => $text,
            'timerProgressBar' => true,
        ]);
    }

    public function alert_warning($title, $text)
    {
        $this->alert('warning', $title, [
            'position' => 'center',
            'timer' => 5000,
            'toast' => false,
            'text' => $text,
            'timerProgressBar' => true,
        ]);
    }

    public function alert_info($title, $text)
    {
        $this->alert('info', $title, [
            'position' => 'center',
            'timer' => 5000,
            'toast' => false,
            'text' => $text,
            'timerProgressBar' => true,
        ]);
    }

    public function alert_question($title, $text)
    {
        $this->alert('question', $title, [
            'position' => 'center',
            'timer' => 5000,
            'toast' => false,
            'text' => $text,
            'timerProgressBar' => true,
        ]);
    }

    public function alert_question_warning($title, $text)
    {
        $this->alert('question', $title, [
            'position' => 'center',
            'toast' => false,
            'text' => $text,
            'showConfirmButton' => true,
        ]);
    }

}
