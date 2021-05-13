<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Facades\Btui;
use Illuminate\View\Component;

class nav extends Component
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
        $type = 'array',
        $total = 0,
        $align = 'x',
        $links = [],
        $color = 'indigo',
        $size = 'medium'
    ) {
        $this->type = $type;
        $this->total = ($type == 'slot') ? $total : count($links);
        $this->align = $align;
        $this->links = $links;
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
