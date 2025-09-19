<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Nav extends Component
{
    public $links = [
        ['label' => 'Domov', 'url' => '/'],
        ['label' => 'Strešný náter', 'url' => '/stresny-nater'],
        ['label' => 'Fasásdny náter', 'url' => '/fasadny-nater'],
    ];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav');
    }
}
