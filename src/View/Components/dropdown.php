<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Facades\Btui;
use Devaweb\BladeTailUI\Traits\btuiMenu;
use Illuminate\View\Component;

class dropdown extends Component
{
    use btuiMenu;

    public $text;

    public $style;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text = "Click", $color = 'white', $size = 'small')
    {
        $this->text = $text;
        $this->style = Btui::theme($color)
            ->add(['cursor-pointer', 'text-center','w-min'])
            ->padding($size)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.dropdown');
    }
}
