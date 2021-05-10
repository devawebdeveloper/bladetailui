<?php

namespace Devaweb\BladeTailUI\Traits;

use Illuminate\Support\Facades\Cache;

trait btuiMenu
{
    

    /**
     * Add Link to Menu
     *
     * @param string $menu 
     * @param string $url 
     * @param string $label 
     * @param string $icon 
     * 
     * @return void
     */
    public function addLinkToMenu($menu, $url, $label, $icon = '')
    {
        
        //$cmenu = Cache::get('btui.menu');
        
        $m = [ 
            'label' => $label,
            'icon'  => $icon,
            'url'   => $url,
        ];

        $keys = array_keys($GLOBALS['btui']['menu']);

        if (in_array($menu, $keys)) {
            array_push($GLOBALS['btui']['menu'][$menu]['links'], $m);
        } else {
            $GLOBALS['btui']['menu'][$menu]['links'] = [$m];
            $GLOBALS['btui']['menu'][$menu]['open'] = true;
        }
        
        //Cache::forever('btui.menu', $cmenu);

    }

    /**
     * Get menu
     *
     * @return array
     */
    public function getMenu()
    {
        return $GLOBALS['btui']['menu'];
    }
}
