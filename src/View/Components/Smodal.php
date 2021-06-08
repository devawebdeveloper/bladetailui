<?php

namespace Devaweb\BladeTailUI\View\Components;

use Illuminate\View\Component;

class Smodal extends Component
{   

    public $title;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = "")
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.smodal');
    }
}
