<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContactForm extends Component
{
    public $sended;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($sended=false)
    {
        $this->sended=$sended;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contact-form');
    }
}
