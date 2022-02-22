<?php

namespace App\Http\Livewire\Components;

use App\Classes\NavMenuItem;
use Livewire\Component;

class NavMenu extends Component
{

    public $items = [];

    public function __construct()
    {
        array_push($this->items,new NavMenuItem(__('navmenu.home'), route('home'), []));
        array_push($this->items, new NavMenuItem(__('navmenu.blog'), route('blog'), []));
        array_push($this->items, new NavMenuItem(__('navmenu.our-products'), route('products'), []));
        array_push($this->items, new NavMenuItem(__('navmenu.our-departments'), route('departments'), []));
        array_push($this->items, new NavMenuItem(__('navmenu.about-us'), route('aboutus'), []));
        array_push($this->items, new NavMenuItem(__('navmenu.contact-us'), route('contactus'), []));
    }

    //        array_push "'title' => _('menu.home'), 'url' => '', 'items' => []"),


    public function render()
    {
        return view('livewire.components.nav-menu');
    }
}
