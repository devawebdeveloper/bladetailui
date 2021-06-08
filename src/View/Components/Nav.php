<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Facades\Btui;
use Illuminate\View\Component;

class Nav extends Component
{

    public $type;

    public $total;

    public $align;

    public $links;

    public $linkStyle;

    public $color;

    public $size;

    public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $total = 0,
        $axis = 'x',
        $color = '',
        $size = '',
        $class = ''
    ) {
        
        $this->total =  $total;
        $this->align = $axis;
        $this->color = $color == '' ? config('btui.theme') : $color;
        $this->size = $size == '' ? config('btui.size') : $size;
        $this->class = $class;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.nav');
    }
}
