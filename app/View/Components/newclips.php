<?php

namespace App\View\Components;
use App\Models\clip;
use Illuminate\View\Component;



class newclips extends Component
{
    public $clips;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->clips=clip::latest()->take(6)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.newclips');
    }
}
