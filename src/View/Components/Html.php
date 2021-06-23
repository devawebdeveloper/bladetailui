<?php

namespace Devaweb\BladeTailUI\View\Components;

use Illuminate\View\Component;

class Html extends Component
{

    public $title;

    public $bodyClass;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = '', $bodyClass="bg-gray-100")
    {
        $this->title = $title;
        $this->bodyClass = $bodyClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.html');
    }
}
