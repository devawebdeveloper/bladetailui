<?php

namespace Devaweb\BladeTailUI\View\Components;

use Illuminate\View\Component;

class Hero extends Component
{
    //col width
    public $width;

    //text align
    public $textalign;

    //justify align
    public $justify;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $width = "8",
        $textalign = "center", 
        $justify   = "center"
    ) {
        $this->width = $width;
        $this->textalign = $textalign;
        $this->justify = $justify;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.hero');
    }
}
