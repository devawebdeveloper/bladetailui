<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Traits\btuiBasic;
use Illuminate\View\Component;

class tabs extends Component
{

    use btuiBasic;

    public $tabs;

    public $count = 0;

    public $selected;

    public $tabshow = [];

    public $align;

    public $color;

    public $style;

    /**
     * Construct
     *
     * @param string $tabs 
     * @param string $selected 
     * @param string $color 
     * @param string $align 
     */
    public function __construct(
        $tabs = '',
        $selected = '',
        $color = '',
        $align = 'top'
    ) {
        $this->tabs = ($tabs != '') ? explode(',', $tabs) : [];
        $this->count = count($this->tabs);
        $this->align = $align;

        foreach ($this->tabs as $tab) {
            $this->tabshow[$tab] = false;
        }
        $stab = ($selected == '') ? $this->tabs[0] : $selected;
        $this->tabshow[$stab] = true;
        $this->theme = $color == '' ? $this->theme : $color ;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.tabs');
    }
}
