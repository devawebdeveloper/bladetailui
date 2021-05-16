<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Facades\Btui;
use Devaweb\BladeTailUI\Traits\btuiBasic;
use Illuminate\View\Component;

class input extends Component
{

    use btuiBasic;

    public $style;

    public $icon;

    public $color;

    public $iconstyle;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type="default", $size = 'small', $showicon = true)
    { 
        $color = config('btui.formTypes.'.$type.'.color');
        $this->color = $color;
        //out
        $this->style = Btui::theme($color)
            ->add(['rounded','border','w-full','outline-none'])
            ->padding($size, 'form')
            ->border(300)
            ->get();

        //icon
        $this->icon = $showicon ? config('btui.formTypes.'.$type.'.icon') : false;

        if ($size == 'small') {
            $this->iconstyle = 'text-sm w-5 h-5';
        } else {
            $this->iconstyle = 'text-sm w-6 h-6';
        } 

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
