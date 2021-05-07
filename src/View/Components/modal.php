<?php

namespace Devaweb\BladeTailUI\View\Components;

use Illuminate\View\Component;

class modal extends Component
{

    public $title;

    public $width;

    public $modalname;

    public $align_values = [ 
        "left" => "justify-start",
        "right" => "justify-end",
        "center" => "justify-center"
    ];

    public $align;
    /**
     * Create a new component instance.
     * 
     * @param string $modalname 
     * @param string $title 
     * @param string $width 
     * @param string $align 
     * 
     * @return void
     */
    public function __construct(
        $modalname = "m",
        $title = "Modal", 
        $width = "5", 
        $align = "center"
    ) {
        $this->title = $title;
        $this->width = $width;
        $this->modalname = $modalname;
        $this->align = $this->align_values[$align];
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.modal');
    }
}
