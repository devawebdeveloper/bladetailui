<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Traits\btuiBasic;
use Illuminate\View\Component;

class navbarMenuLink extends Component
{

    use btuiBasic;


    public string $style = "block rounded text-black cursor-pointer border border-transparent ";

    public string $hover = " hover:bg-gray-100 hover:border-gray-200 ";

    public $forNav;


    /**
     * Create a new component instance.
     * 
     * @param string $for   for navbar size
     * @param string $class background and hover custome styles
     * 
     * @return void
     */
    public function __construct($for = "", $class="")
    {   
        if ($for == "") {
            $for = $GLOBALS['btui']['navbar']['size'];
        }

        $this->forNav = [
            'small' => " ".$this->psm." text-sm ",
            'normal' => " ".$this->pmd." text-base ",
            'big' => " ".$this->plg." text-base ",
        ];

        $this->style = $this->style
                        .$this->transition
                        .$this->forNav[$for];
        
        $this->style .= ($class == "") ? $this->hover : $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.navbar-menu-link');
    }
}
