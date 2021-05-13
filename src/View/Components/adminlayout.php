<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Facades\Btui;
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
        $color = 'white',
        $headercolor = ''
    ) {

        $this->sitetitle = $sitetitle;
        $this->color = $color;

        $this->style['bg'] = Btui::theme($color)->bg()
            ->add(['border-t-4'])->border(700)->text()->get();
        
        $headercolor = ($headercolor == '') ? $color : $headercolor;    
        $this->style['hbg'] = Btui::theme($headercolor)
            ->gradient('r')
            ->border(700)->text()->get();
        
        $this->style['closebutton'] = Btui::theme($color)->bg()->text()->get();
        
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
