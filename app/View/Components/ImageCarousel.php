<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class ImageCarousel extends Component
{

    public $title;
    public $subtitle;
     public $id;
      public $images; 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = '', $subtitle = '',$images = [])
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->id = 'carousel-' . Str::random(8);
        $this->images = $images;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.image-carousel');
    }
}
