<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{

    public $title, $btnTxt, $url, $showBtn;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null,$btnTxt = null,$url = null,$showBtn = false)
    {
        $this->title = $title;
        $this->btnTxt = $btnTxt;
        $this->url = $url;
        $this->showBtn = $showBtn;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
