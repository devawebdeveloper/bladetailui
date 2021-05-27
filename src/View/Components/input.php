<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Facades\Btui;
use Devaweb\BladeTailUI\Traits\btuiBasic;
use Illuminate\View\Component;

class Input extends Component
{

    use btuiBasic;

    public $style;

    public $icon;

    public $color;

    public $iconstyle;

    public $type;

    public $size;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type="default", $size = 'md')
    { 
        $this->type = $type;
        $color = config('btui.formTypes.'.$type.'.color');
        $this->color = $color;
        $this->size = $size;

        /**
        $this->style = Btui::theme($color)
            ->add([' w-full border-0 rounded border-b m-0 '])
            ->padding($size, 'form')
            ->border(200)
            ->get();
        */
        //icon
        $this->icon = ($type != 'default') ? config('btui.formTypes.'.$type.'.icon') : false;

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
