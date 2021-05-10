<?php

namespace Devaweb\BladeTailUI\View\Components;

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
        $color = 'white'
    ) {

        Cache::remember(
            'btui.sidenav', 
            now()->addMinutes(30),
            function () use ($sections) {
                $this->sections = explode(',', $sections);

                foreach ($this->sections as $ind => $sec) {
                    $sec = explode(':', $sec);
                    $this->menu[$sec[0]] = [
                        'count' => $sec[1],
                        'open' => ($ind == 0) ? true : false
                    ];
                } 
            }
        );
       
        $this->color = $color;
        $this->getStyle();
        $this->linkStyle = 'block hover:shadow-sm px-5 py-2 capitalize 
            transition-all duration-300 '
            .$this->style['linktext'];
        $this->active = $this->style['active'];

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

        $this->style['bg'] = ($color == 'white') 
            ? ' bg-white ' : ' bg-'.$color.'-700 divide-'.$color.'-600 ';

        $this->style['maintext'] = ($color == 'white') 
            ? ' text-gray-600 hover:bg-gray-200 ' 
            : ' text-'.$color.'-200 hover:bg-'.$color.'-800 ';

        $this->style['linktext'] = ($color == 'white') 
            ? ' text-gray-900 hover:bg-gray-100 ' 
            : ' text-'.$color.'-100 hover:bg-'.$color.'-600 ';
        
        $this->style['active'] = ($color == 'white')
            ? ' bg-gray-100 shadow-sm' : ' bg-'.$color.'-600 shadow-sm ';
    

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
