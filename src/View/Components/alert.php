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

    public $icon;

    public $closable;

    public $size;

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
        $type = 'default',
        $closable = false,
        $size = ''
    ) {
        $this->text = $text;
        $this->color = config('btui.formTypes.'.$type.'.color');
        $this->closable = $closable;    
        $this->icon = config('btui.formTypes.'.$type.'.icon');
        $this->size = $size;
    }

    public function style()
    {
        $alert = [
            //defalt size - options = medium | large
            'size' => 'medium',
    
            //style
            'outline'     => 'flex items-center justify-between gap-2 px-2 py-2 border-l-4 rounded shadow-sm',
            'content'     => 'pl-1 pr-4 font-semibold',
            'closebutton' => 'px-2 font-bold border cursor-pointer rounded' 
        ];

        return $alert;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $css = $this->style();
        return view('dwbtui::components.alert', compact('css'));
    }
}
