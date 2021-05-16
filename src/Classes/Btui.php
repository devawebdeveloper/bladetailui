<?php

namespace Devaweb\BladeTailUI\Classes;

use Illuminate\Support\Arr;

class Btui
{
    public $theme;

    public $secondaryTheme;

    public $themeType;

    public $hover = false;

    public $hoverType;

    public $transition = 'transition-all duration-300';

    public $padding = [
        'small' => 'px-2 py-1',
        'medium' => 'px-3 py-2',
        'large' => 'px-4 py-3'
    ];

    public $formPadding = [
        'small' => 'px-3 py-1',
        'medium' => 'px-4 py-2',
        'large' => 'px-5 py-3'
    ];

    public $colorVar = [
        'dark' => [
            'bg' => 700,
            'border' => 600,
            'divide' => 600,
            'text' => 100
        ],
        'light' => [
            'bg' => 200,
            'border' => 300,
            'divide' => 300,
            'text' => 900
        ],
    ];

    public $hoverVar = [
        'light' => [
            'bg' => 700,
            'border' => 600,
            'divide' => 600,
            'text' => 100
        ],
        'dark' => [
            'bg' => 200,
            'border' => 300,
            'divide' => 300,
            'text' => 900
        ],
    ];

    public $final = [];

    /**
     * Construct
     *
     * @param string $theme 
     * @param string $hover 
     */
    function __construct($theme = '', $hover = 'false')
    {

        $this->padding = config('btui.padding');
        $this->formPadding = config('btui.formPadding');
        $this->colorVar = config('btui.colorVar');
        $this->hoverVar = config('btui.hoverVar');

        $theme = ($theme == '') ? config('btui.theme') : $theme;

        $theme = explode('-', $theme);

        if (count($theme) == 1) {
            $this->theme = $theme[0];
            $this->themeType = 'dark';
        } else {
            $this->theme = $theme[1];
            $this->themeType = $theme[0];
        }

        $this->hover = $hover;
        $this->hoverType = ($this->themeType == 'dark') ? 'light' : 'dark';
        //dd($this->theme, $this->themeType, $this->hover, $this->hoverType);

    }

    /**
     * Set theme - Important
     *
     * @param string $theme All tailwind colors as themes
     * @param bool   $hover for hover style must be true
     * 
     * @return void
     */
    public function theme($theme = '', $hover = false)
    {
        //$this->theme = $theme;
        return new Btui($theme, $hover);
    }

    /**
     * Check theme type and modify color varient
     *
     * @param int    $var 
     * @param string $for 
     * 
     * @return int
     */
    public function themetype($var, $for = '')
    {
        if ($var == 0) {
            $ttype = ($this->hover) ? $this->hoverVar : $this->colorVar;
            //dd($ttype, $this->themeType);
            $var = $ttype[$this->themeType][$for];
            //dd($var);
        }
        return $var;
    }

    /**
     * Add more styles
     *
     * @param array $styles 
     * 
     * @return object
     */
    public function add($styles = [])
    {

        if (count($styles) > 0) {
            foreach ($styles as $style) {
                if (!in_array($style, $this->final)) {
                    array_push($this->final, $style);
                }
            }
        }
        return $this;
    }

    /**
     * Add some padding
     *
     * @param string $size options - small | medium | large
     * @param string $type options - normal | form
     * 
     * @return object
     */
    public function padding($size = '', $type = 'normal')
    {
        $size = ($size == '') ? config('btui.size') : $size;

        $padding = ($type == 'normal')
            ? $this->padding[$size]
            : $this->formPadding[$size];

        array_push($this->final, $padding);
        return $this;
    }



    /**
     * Seg bg
     *
     * @param integer $var   color varient like bg-gray-($var) Default = 400
     * @param string  $color 
     * 
     * @return object
     */
    public function bg($var = 0, $color = "")
    {
        $color = ($color == "") ? $this->theme : $color;
        $this->prepare('bg', $color, $var);
        return $this;
    }

    /**
     * Set Border Color
     *
     * @param integer $var color varient like border-gray-($var) Default = 500
     * 
     * @return object
     */
    public function border($var = 0)
    {
        $this->prepare('border', $this->theme, $var);
        return $this;
    }

    /**
     * Set divide color
     *
     * @param integer $var color varient like divide-gray-($var) Default = 300
     * 
     * @return object
     */
    public function divide($var = 0)
    {
        $var =
            $this->prepare('divide', $this->theme, $var);
        return $this;
    }

    /**
     * Set text color
     *
     * @param integer $var color varient like divide-gray-($var) Default = 700
     * 
     * @return object
     */
    public function text($var = 0)
    {
        $this->prepare('text', $this->theme, $var);
        return $this;
    }

    /**
     * Add some gradient effect
     *
     * @param string  $dir  l|r|t|b
     * @param integer $fvar from varient no
     * @param integer $vvar via varient no
     * @param integer $tvar to varient no
     * 
     * @return object
     */
    public function gradient($dir = 'l', $fvar = 500, $vvar = 600, $tvar = 700)
    {

        if ($this->themeType == 'light') {
            $fvar = $fvar - 500;
            $vvar = $vvar - 500;
            $tvar = $tvar - 400;
        }

        $gr = [
            'bg-gradient-to-' . $dir,
            'from-' . $this->theme . '-' . $fvar,
            'via-' . $this->theme . '-' . $vvar,
            'to-' . $this->theme . '-' . $tvar,
        ];


        $this->add($gr);

        return $this;
    }

    /**
     * Basic style prepartion
     *
     * @param string $name  like bg|border
     * @param string $color color
     * @param string $var   like 50 - 900
     * @param string $sep   "-"
     * 
     * @return void
     */
    protected function prepare($name, $color, $var, $sep = '-')
    {
        $var = $this->themetype($var, $name);

        $p = $name . $sep . $color . $sep . $var;

        array_push($this->final, $p);
    }


    /**
     * Add Hover style
     *
     * @return object
     */
    public function hover()
    {
        $final = [];

        foreach ($this->final as $f) {
            $sf = 'hover:' . $f;
            array_push($final, $sf);
        }

        $this->final = $final;

        return $this;
    }

    /**
     * Get final style
     *
     * @return string
     */
    public function get()
    {
        $this->add(['transition-all', 'duration-300']);

        $final = implode(' ', $this->final);
        return $final;
    }



    // -----------------------------------
    // additional functions

    public function bgdividetext($bvar = 700, $dvar = 800, $tvar = 100)
    {
        return $this->bg($bvar)->divide($dvar)->text($tvar)->get();
    }
}
