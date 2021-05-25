<?php

namespace Devaweb\BladeTailUI\View\Components;

use Illuminate\View\Component;

class Confirm extends Component
{
    public $text;
 
    /**
     * Create a new component instance.
     *
     * @return void
     */ 
    public function __construct($text = "Are you sure?")
    {
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.confirm');
    }
}
