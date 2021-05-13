<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Facades\Btui;
use Devaweb\BladeTailUI\Traits\btuiBasic;
use Illuminate\View\Component;

class select extends Component
{   
    use btuiBasic;

    public $style;

    public $options = [];

    public $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $type="default", 
        $size = 'small', 
        $options = [], 
        $placeholder = 'Select...'
    ) {   

        $this->options = $options;
        $this->placeholder = $placeholder;

        $color = $this->tFormTypes[$type];
        //out
        $this->style = Btui::theme($color)
            ->add(['w-full','min-w-min','rounded','border','outline-none'])
            ->padding($size, 'form')
            ->border()
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.select');
    }
}
