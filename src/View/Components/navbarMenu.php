<?php

namespace Devaweb\BladeTailUI\View\Components;

use Illuminate\View\Component;

class navbarMenu extends Component
{


    public $align;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($align = 'end')
    {
        $this->align = $align;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.navbar-menu');
    }
}
