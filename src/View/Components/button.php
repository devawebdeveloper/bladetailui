<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Facades\Btui;
use Devaweb\BladeTailUI\Traits\btuiBasic;
use Illuminate\View\Component;

class button extends Component
{
    use btuiBasic;

    public $element;

    public $color;

    public $basic_style = [
        "inline-block", 'capitalize', 'cursor-pointer', 
         'shadow-sm','transition-all', 'duration-300', 
        'rounded', 'min-w-min', 'hover:shadow'];

    public $size;

    public $sizeStyle = [
        'small' => ['px-3','py-1','text-sm'],
        'medium' => ['px-4','py-2'],
        'large' => ['px-8','py-3']
    ];

    public $style;

    public $isLight = false;


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
        $this->element = $element;
        $this->color = $color;

        //dd($this->color);

        $this->style = Btui::theme($this->color)->add($this->basic_style)
            ->padding($size, 'form')
            ->bg()
            ->text()
            ->get(); 
        
        $this->style .=" ". Btui::theme($this->color)
            ->bg()->hover()->get();
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
