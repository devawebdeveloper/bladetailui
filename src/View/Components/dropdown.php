<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Facades\Btui;
use Devaweb\BladeTailUI\Traits\btuiMenu;
use Illuminate\View\Component;

class Dropdown extends Component
{
    use btuiMenu;

    public $text;

    public $color;

    public $size;

    public $style;

    public $align;

    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text = "Click", $color = 'white', $size = '', $align = 'left', $icon = false)
    {
        $this->text = $text;

        $this->size = $size;

        $this->style = Btui::theme($color)
            ->add(['cursor-pointer'])
            ->padding($this->size, 'form')
            ->get();

        $this->align = $align;
        $this->icon = $icon;
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
