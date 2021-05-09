<?php

namespace Devaweb\BladeTailUI\View\Components;

use Illuminate\View\Component;

class toast extends Component
{   

    
    public $msg;

    public $closable;

    public function __construct(
        $msg = '',
        $closable = false  
    ) {
        $this->msg = $msg;
        $this->closable = $closable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.toast');
    }
}
