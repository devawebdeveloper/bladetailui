<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Facades\Btui;
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
        $color = $this->tFormTypes[$type];
        //out
        $this->style = Btui::theme($color)
            ->add(['rounded','border','w-full','outline-none'])
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
        return view('dwbtui::components.input');
    }
}
