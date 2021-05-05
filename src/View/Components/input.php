<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Traits\btuiBasic;
use Illuminate\View\Component;

class input extends Component
{

    use btuiBasic;

    public $style;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type="default", $size = 'small')
    { 
        //out
        $this->style = $this->getFormStyle($type, $size);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.input');
    }
}
