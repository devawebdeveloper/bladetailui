<?php

namespace Devaweb\BladeTailUI\View\Components;

use Illuminate\View\Component;

class alert extends Component
{

    public $text;

    public $color;

    public $types = [
        'success' => [
            'outline' => 'bg-green-500 border-green-600',
            'text' => 'text-white',
            'closable' => 'text-white bg-green-400'
        ],
        'primary' => [
            'outline' => 'bg-gray-500 border-gray-600',
            'text' => 'text-white',
            'closable' => 'text-white bg-gray-400'
        ],
        'warning' => [
            'outline' => 'bg-yellow-500 border-yellow-600',
            'text' => 'text-black',
            'closable' => 'text-black bg-yellow-400'
        ],
        'danger' => [
            'outline' => 'bg-red-500 border-red-600',
            'text' => 'text-white',
            'closable' => 'text-white bg-red-400'
        ],
        'info' => [
            'outline' => 'bg-indigo-100 border-indigo-300',
            'text' => 'text-black',
            'closable' => 'text-black bg-indigo-300'
        ]
    ];

    public $closable;

    /**
     * Create a new component instance.
     * 
     * @param string $text 
     * @param string $color 
     * @param bool   $closable  
     * 
     * @return void
     */
    public function __construct(
        $text = "",
        $color = 'green',
        $closable = false
    ) {
        $this->text = $text;
        $this->color = $color;
        $this->closable = $closable;    
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('dwbtui::components.alert');
    }
}
