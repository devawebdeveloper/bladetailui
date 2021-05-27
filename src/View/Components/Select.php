<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Facades\Btui;
use Devaweb\BladeTailUI\Traits\btuiBasic;
use Illuminate\View\Component;

class Select extends Component
{   
    use btuiBasic;

    public $style;

    public $options = [];

    public $placeholder;

    public $size;

    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $type="default", 
        $size = 'md', 
        $options = [], 
        $placeholder = 'Select...'
    ) {   

        $this->options = $options;
        $this->placeholder = $placeholder;

        $color = config('btui.formTypes.'.$type.'.color');

        $this->size = $size;
        $this->type = $type;
        
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
