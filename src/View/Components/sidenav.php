<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Facades\Btui;
use Devaweb\BladeTailUI\Traits\btuiMenu;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;
use phpDocumentor\Reflection\Types\This;

class sidenav extends Component
{

    use btuiMenu;

    public $menu;

    public $sections;

    public $linkStyle;

    public $color;

    public $style;

    public $active;

    /**
     * Construct
     * 
     * @param string $sections 
     * @param string $color 
     */
    public function __construct(
        $sections = 'main:1',
        $color = 'light-green'
    ) {


        $this->sections = explode(',', $sections);

        foreach ($this->sections as $ind => $sec) {
            $sec = explode(':', $sec);
            $this->menu[$sec[0]] = [
                'count' => $sec[1],
                'open' => ($ind == 0) ? true : false
            ];
        }


        $this->color = $color;
        $this->getStyle();
        $this->linkStyle = Btui::theme($color)->add(['block', 'px-4', 'py-2'])->get()
            . " " . $this->style['linktext'];
        $this->active = Btui::theme($color)->add(['block', 'px-4', 'py-2'])->get()
            ." ".$this->style['active'];

        //dd($this->menu);
    }

    /**
     * Gerate style
     *
     * @return void
     */
    public function getStyle()
    {
        $color = $this->color;

        $this->style['bg'] = Btui::theme($color)->bg()->divide()
            ->get();
        //  dd($this->style['bg']);        

        $this->style['maintext'] = Btui::theme($color)->text()->get();
        $this->style['maintext'] .= " " . Btui::theme($color, true)
            ->bg()->text()
            ->hover()->get();
        //dd($this->style['maintext']);    

        $this->style['linktext'] = Btui::theme($color)->text()->get();
        $this->style['linktext'] .= " " . Btui::theme($color, true)->bg()
            ->text()->hover()->get();
        //dd($this->style['linktext']);
        $this->style['active'] = Btui::theme($color, true)->bg()
            ->text()
            ->get(); 
           // dd($this->style['active']);
    }

    /**
     * Link style
     *
     * @param boolean $active 
     * 
     * @return string
     */
    public function linkStyle($active = false)
    {
        $index = ($active) ? $this->active : $this->linkStyle; 
        return $index;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.sidenav');
    }
}
