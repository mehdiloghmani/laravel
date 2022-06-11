<?php

namespace App\View\Components;

use App\Models\clip;
use Illuminate\View\Component;

class relatedclips extends Component
{
    public $clips;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(clip $clip)
    {
        $this->clips=$clip->relatedclip(10);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.relatedclips');
    }
}
