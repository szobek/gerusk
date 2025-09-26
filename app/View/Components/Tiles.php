<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Tiles extends Component
{
    public $title;
    public $images;
    /**
     * Create a new component instance.
     */
    public function __construct($title="",$images=[])
    {
        $this->title = $title;
        $this->images = $images;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tiles');
    }
}
