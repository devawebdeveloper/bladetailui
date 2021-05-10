<?php

namespace Devaweb\BladeTailUI;

use Devaweb\BladeTailUI\View\Components\adminlayout;
use Devaweb\BladeTailUI\View\Components\alert;
use Devaweb\BladeTailUI\View\Components\select;
use Devaweb\BladeTailUI\View\Components\button;
use Devaweb\BladeTailUI\View\Components\dropdown;
use Devaweb\BladeTailUI\View\Components\dropdownLink;
use Devaweb\BladeTailUI\View\Components\hero;
use Devaweb\BladeTailUI\View\Components\input;
use Devaweb\BladeTailUI\View\Components\loader;
use Devaweb\BladeTailUI\View\Components\modal;
use Devaweb\BladeTailUI\View\Components\navbar;
use Devaweb\BladeTailUI\View\Components\navbarMenu;
use Devaweb\BladeTailUI\View\Components\navbarMenuLink;
use Devaweb\BladeTailUI\View\Components\navbarTitle;
use Devaweb\BladeTailUI\View\Components\sidenav;
use Devaweb\BladeTailUI\View\Components\sloader;
use Devaweb\BladeTailUI\View\Components\smodal;
use Devaweb\BladeTailUI\View\Components\tabs;
use Devaweb\BladeTailUI\View\Components\toast;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class BladeTailUIServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */ 
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        Cache::forever('btui.menu', []);
        $GLOBALS['btui'] = [];
        $GLOBALS['btui']['menu'] = [];

        //blde components
        $this->loadViewComponentsAs(
            'btui', 
            [
                //navbar
                navbar::class,
                navbarMenu::class,
                navbarTitle::class,
                navbarMenuLink::class,
                //hero
                hero::class,
                //alert
                alert::class,
                //button
                button::class,
                //dropdown
                dropdown::class,
                dropdownLink::class,
                //input
                input::class,
                //select
                select::class,
                //loader
                loader::class,
                sloader::class,

                //modals
                modal::class,
                smodal::class,

                //toast
                toast::class,

                //tabs
                tabs::class,

                //sidenav
                sidenav::class,

                //admin layout
                adminlayout::class,
            ]
        );

        //views
        $this->loadViewsFrom(__DIR__ . "/views", "dwbtui");
    }
}