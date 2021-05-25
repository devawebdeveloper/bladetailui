<?php

namespace Devaweb\BladeTailUI\View\Components;

use Devaweb\BladeTailUI\Traits\btuiBasic;
use Illuminate\View\Component;

class Tabs extends Component
{

    use btuiBasic;

    public $tabs;

    public $count = 0;

    public $selected;

    public $tabshow = [];

    public $align;

    public $axis;

    public $color;

    public $type;

    public $contentClass;

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
        $align = 'start',
        $axis  = 'x',
        $type = 'tabs',
        $tabContentClass = ''
    ) {
        $this->tabs = ($tabs != '') ? explode(',', $tabs) : [];
        $this->count = count($this->tabs);
        $this->align = $align;

        $this->contentClass = $tabContentClass;

        foreach ($this->tabs as $tab) {
            $this->tabshow[$tab] = false;
        }

        if ($this->count > 0) {
            $stab = ($selected == '') ? $this->tabs[0] : $selected;
            $this->tabshow[$stab] = true;
        }
        
        
        $this->theme = $color == '' ? $this->theme : $color ;
        $this->type = $type;
        $this->axis = $axis;
        
    }


    public function tabStyle()
    {
        $c = $this->theme;

        $ts['bg'] = ($this->axis == 'x') ? '' : 'flex ';

        $ts['tabs']  = ($this->axis == 'x') 
                        ? 'flex justify-'.$this->align.' items-center '
                        : 'w-2/12 ' ;
        $ts['tabs'] .= "capitalize ";

        $ts['tab'] = ($this->axis == 'x') 
                    ? ' rounded-t-md py-1 '
                    : ' rounded-l-md py-2 ' ;

        $ts['tab'] .= 'bg-'.$c.'-100 px-4 cursor-pointer ';

        $ts['tab-selected'] = 'bg-'.$c.'-600 text-white ';
        $ts['tab-hover'] = 'bg-'.$c.'-100 text-black ';
        $ts['content'] = 'bg-white shadow border-'.$c.'-600 p-3 ';
        $ts['content'] .= ($this->axis == 'x') ? 'border-t-4 rounded-b-md w-full' : 'border-l-4 rounded-r-md w-10/12 ';

        return $ts;
    }

    public function pillStyle()
    {   
        $c = $this->theme;

        $tp['bg'] = ($this->axis == 'x') ? '' : 'flex gap-2';
        $tp['tabs'] = ($this->axis == 'x') 
                    ? 'flex justify-'.$this->align.' items-center gap-2 '
                    : 'w-2/12 ';
        $tp['tabs'] .= "capitalize ";
        
        $tp['tab'] = 'px-4 py-1 rounded-md mb-2 ';
        $tp['tab'] .= ' bg-'.$c.'-100 cursor-pointer ';
        $tp['tab-selected'] = 'bg-'.$c.'-600 text-white';
        $tp['tab-hover'] = ' bg-'.$c.'-100 ';

        $tp['content'] = 'bg-white rounded-md shadow p-3 border-'.$c.'-600 ';
        $tp['content'] .= ($this->axis == 'x') ? 'w-full border-t-2 '  : ' w-10/12 border-l-2 ';

        return $tp;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $tstyle = ($this->type == 'tabs') ? $this->tabStyle() : $this->pillStyle();
        return view('dwbtui::components.tabs', compact('tstyle'));
    }
}
