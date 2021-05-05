<?php

namespace Devaweb\BladeTailUI\View\Components;

use Illuminate\View\Component;

class loader extends Component
{
    public $loading;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($loading = true)
    {
        $this->loading = $loading;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.loader');
    }
}
