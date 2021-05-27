<?php

namespace Devaweb\BladeTailUI\View\Components;

use App\View\Components\th;
use Illuminate\View\Component;

class Navbar extends Component
{
    //Site Title
    public String $sitename;

    //navbar background class
    public string $bg;

    //navbar size
    public string $size;

    //navbar shadow
    public string $shadow;

    //size styles
    public array $sCss = [
        'small' => 'py-2',
        'normal' => 'py-4',
        'big' => 'py-6'
    ];

    //size based header
    public array $tCss = [
        'small' => ' text-sm ',
        'normal' => ' text-xl ',
        'big' => ' text-2xl '
    ];

    /**
     * Create a new component instance.
     *
     * @param string $sitename - Site title 
     * @param string $bg       - navbar background any bg class from tailwind
     * @param string $size     - navbar size small,normal,big
     * @param string $shadow   - shadow size sm,md,lg,xl
     * 
     * @return void
     */
    public function __construct(
        $sitename = "No Site Name",
        $bg = 'transparent',
        $size = 'normal',
        $shadow = 'none'
    ) {
        $this->sitename = $sitename;
        $this->bg = $bg;
        $this->size = $size;
        $this->shadow = " shadow-".$shadow." ";
        $GLOBALS['btui']['navbar']['size'] = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.navbar');
    }
}
