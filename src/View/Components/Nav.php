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

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $total = 0,
        $axis = 'x',
        $color = 'indigo',
        $size = 'medium'
    ) {
        
        $this->total =  $total;
        $this->align = $axis;
        $this->color = $color;

        $basic = Btui::theme($color)
            ->add(['block','rounded-lg'])
            ->padding($size)
            ->text(900)
            ->get(); 

        $hover = Btui::theme($color)
            ->bg(200)->text(900)->hover()->get();

        //dd($hover);
        $this->linkStyle = $basic . " " . $hover;
        $this->linkStyle .= ($axis == 'y') ? ' w-full ' : ' ';
        //dd($this->linkStyle);
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
