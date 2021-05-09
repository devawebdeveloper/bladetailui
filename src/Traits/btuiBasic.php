<?php 

namespace Devaweb\BladeTailUI\Traits;

trait btuiBasic
{

    public $theme = 'gray';

    //basic style classes
    public $transition = " transition-all duration-300 ";

    //padding small
    public $psm = " px-2 ";

    //padding normal
    public $pmd = " px-3 py-1 ";

    //padding big
    public $plg = " px-4 py-2 ";

    //padding big
    public $pxl = " px-6 py-3 ";

    //align
    public $alignments = [
        "left" => " justify-start ",
        "right" => " justify-end ",
        "center" => " justify-center "
    ];

    //border
    public $border = " border border-gray-300 ";

    //basic colors
    public $colors = [
        'white' => 'bg-white text-black border-gray-300 hover:bg-gray-50',
        'gray' => 'bg-gray-600 text-white border-gray-900 hover:bg-gray-800',
        'green' => 'bg-green-600 text-white border-green-900 hover:bg-green-800',
        'yellow' => 'bg-yellow-600 text-black border-yellow-900 hover:bg-yellow-800',
        'indigo' => 'bg-indigo-600 text-white border-indigo-900 hover:bg-indigo-800',
        'red' => 'bg-red-600 text-white border-red-900 hover:bg-red-800',
        'purple' => 'bg-purple-600 text-white border-purple-900 hover:bg-purple-800',
        'pink' => 'bg-pink-600 text-white border-pink-900 hover:bg-pink-800',
        'blue' => 'bg-blue-600 text-white border-blue-900 hover:bg-blue-800',
        'lightgray' => 'bg-gray-200 text-black border-gray-400 hover:bg-gray-300',
        'lightgreen' => 'bg-green-200 text-black border-green-400 hover:bg-green-300',
        'lightyellow' => 'bg-yellow-200 text-black border-yellow-400 hover:bg-yellow-300',
        'lightindigo' => 'bg-indigo-200 text-black border-indigo-400 hover:bg-indigo-300',
        'lightred' => 'bg-red-200 text-black border-red-400 hover:bg-red-300',
        'lightpurple' => 'bg-purple-200 text-black border-purple-400 hover:bg-purple-300',
        'lightpink' => 'bg-pink-200 text-black border-pink-400 hover:bg-pink-300',
        'lightblue' => 'bg-blue-200 text-black border-blue-400 hover:bg-blue-300',
    ];


    //form styles

    public $tFormStyle = " m-1 w-full border rounded
        outline-none 
        transition-all duration-300
        focus:shadow-sm min-w-min ";

    public $tFormSizes = [
        'small' => ' px-3 py-1 text-sm ',
        'medium' => ' px-4 py-2 ',
        'large' => ' px-5 py-3 text-lg '
    ];

    public $tFormTypes = [
        'default' => ' border-gray-300 ',
        'success' => ' border-green-500 ',
        'warning' => ' border-yellow-400 ',
        'danger' => ' border-red-600 ',
    ];

    /**
     * Get Commen form styles
     *
     * @param string $type 
     * @param string $size 
     * 
     * @return void
     */
    public function getFormStyle($type,$size)
    {
        $this->tFormStyle .= " ".$this->tFormTypes[$type];
        $this->tFormStyle .= " ".$this->tFormSizes[$size];
        return $this->tFormStyle;
    }



    
}