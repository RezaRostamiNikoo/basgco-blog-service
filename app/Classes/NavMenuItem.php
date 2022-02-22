<?php


namespace App\Classes;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class NavMenuItem
{
    public $title;
    public $url;
    public $items;
    public $is_active = false;

    public function __construct($title, $url, $items)
    {
        $this->title = $title;
        $this->url = $url;
        $this->items = $items;
        $this->is_active = URL::current() === $url;
    }
}
