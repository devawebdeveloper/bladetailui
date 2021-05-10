<?php

namespace Devaweb\BladeTailUI\View\Components;

use Illuminate\View\Component;

class adminlayout extends Component
{
    public $sitetitle;

    public $color;

    public $style;

    /**
     * Create a new component instance.
     * 
     * @param string $sitetitle 
     * 
     * @return void
     */
    public function __construct(
        $sitetitle = '',
        $color = 'white'
    ) {

        $this->sitetitle = $sitetitle;
        $this->color = $color;

        $this->style['bg'] = $color == 'white' 
            ? 'bg-white' : 'bg-'.$color.'-700';
        
        $this->style['closebutton'] = $color == 'white' 
            ? 'bg-gray-300 text-black' : 'bg-'.$color.'-800 text-white ';
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.adminlayout');
    }
}
