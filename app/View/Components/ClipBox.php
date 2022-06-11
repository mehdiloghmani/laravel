<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ClipBox extends Component
{
    public $clip;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->clip= $clip;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.clip-box');
    }
}
