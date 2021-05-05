<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Traits\btuiBasic;
use Illuminate\View\Component;

class button extends Component
{
    use btuiBasic;

    public $element;

    public $color;

    public $basic_style = "inline-block capitalize cursor-pointer 
    border-b transition-all duration-300
    rounded shadow hover:shadow-sm min-w-min";

    public $size;

    public $sizeStyle = [
        'small' => 'px-3 py-1 text-sm',
        'medium' => 'px-4 py-2',
        'large' => 'px-8 py-3'
    ];


    /**
     * Create a new component instance.
     *
     * @param string $element 
     * @param string $color 
     * @param string $size 
     * 
     * @return void
     */
    public function __construct(
        $element = "button",
        $color = "white",
        $size = "small"
    ) {
        $this->sizeStyle = $this->tFormSizes;
        $this->element = $element;
        //$this->basic_style = $this->tFormStyle;
        //restyle
        $this->basic_style .= " ";
        $this->basic_style .= $this->tFormSizes[$size];
        $this->basic_style .= " ";
        $this->basic_style .= $this->colors[$color];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.button');
    }
}
