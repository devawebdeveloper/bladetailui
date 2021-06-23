<?php

namespace Devaweb\BladeTailUI\View\Components;

use App\View\Components\th;
use Devaweb\BladeTailUI\Traits\btuiBasic;
use Illuminate\View\Component;

class Navbar extends Component
{

    use btuiBasic;

    //Site Title
    public String $sitename;

    public $titleClass;

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
        $titleClass = ''
    ) {
        $this->sitename = $sitename;
        $this->titleClass = $titleClass;
        
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
