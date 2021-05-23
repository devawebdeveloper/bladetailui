<?php

namespace Devaweb\BladeTailUI;

require_once __DIR__."/Helpers/helpers.php";

use Devaweb\BladeTailUI\Classes\Btui;
use Devaweb\BladeTailUI\View\Components\adminlayout;
use Devaweb\BladeTailUI\View\Components\alert;
use Devaweb\BladeTailUI\View\Components\select;
use Devaweb\BladeTailUI\View\Components\button;
use Devaweb\BladeTailUI\View\Components\confirm;
use Devaweb\BladeTailUI\View\Components\dropdown;
use Devaweb\BladeTailUI\View\Components\dropdownLink;
use Devaweb\BladeTailUI\View\Components\hero;
use Devaweb\BladeTailUI\View\Components\input;
use Devaweb\BladeTailUI\View\Components\loader;
use Devaweb\BladeTailUI\View\Components\modal;
use Devaweb\BladeTailUI\View\Components\nav;
use Devaweb\BladeTailUI\View\Components\navbar;
use Devaweb\BladeTailUI\View\Components\navbarMenu;
use Devaweb\BladeTailUI\View\Components\navbarMenuLink;
use Devaweb\BladeTailUI\View\Components\navbarTitle;
use Devaweb\BladeTailUI\View\Components\sidenav;
use Devaweb\BladeTailUI\View\Components\sloader;
use Devaweb\BladeTailUI\View\Components\smodal;
use Devaweb\BladeTailUI\View\Components\tabs;
use Devaweb\BladeTailUI\View\Components\toast;
use Illuminate\Support\Facades\App;
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
        App::singleton('btui', function () {
                return new Btui();
            });

        $this->mergeConfigFrom(__DIR__.'/config/btui.php', 'btui');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
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
                nav::class,

                //admin layout
                adminlayout::class,

                //confirm
                confirm::class,
            ]
        );

        //views
        $this->loadViewsFrom(__DIR__ . "/views", "dwbtui");

        //publish
        $this->publishes([
            __DIR__."/config/btui.php" => config_path('btui.php'),
            __DIR__."./../assets/btui.css" => public_path('css/btui.css'),
            __DIR__."./../assets/btui.js" => public_path('js/btui.js'),
        ], 'btui');

        //republish
        $this->publishes([
            __DIR__."./../assets/btui.css" => public_path('css/btui.css'),
            __DIR__."./../assets/btui.js" => public_path('js/btui.js'),
        ], 'btui-update');


        
    }



}
