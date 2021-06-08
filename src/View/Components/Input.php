<?php

namespace Devaweb\BladeTailUI\View\Components;

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
    public function __construct($styleType="default", $size = '')
    { 
        $this->type = $styleType;
        $this->size = $size == '' ? config('btui.size') : $size;
        //icon
        $this->icon = ($this->type != 'default') ? config('btui.formTypes.'.$this->type.'.icon') : false;

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
