<?php

namespace Devaweb\BladeTailUI;

require_once __DIR__."/Helpers/helpers.php";

use Devaweb\BladeTailUI\Classes\Btui;
use Devaweb\BladeTailUI\View\Components\Adminlayout;
use Devaweb\BladeTailUI\View\Components\Alert;
use Devaweb\BladeTailUI\View\Components\{ 
    Button, 
    Confirm, 
    Dropdown, 
    DropdownLink,
    Hero,
    Input,
    Loader,
    Modal,
    Nav,
    Navbar,
    NavbarMenu,
    NavbarMenuLink,
    NavbarTitle,
    Select,
    Sidenav,
    Sloader,
    Tabs,
    Toast,
    Smodal
};
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
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
        $prefix = 'btui';

        //layouts
        Blade::component('admin-layout', Adminlayout::class, $prefix);
        Blade::component('hero', Hero::class, $prefix);

        //form
        Blade::component('alert', Alert::class, $prefix);
        Blade::component('button', Button::class, $prefix);
        Blade::component('dropdown', Dropdown::class, $prefix);
        Blade::component('dropdown-link', DropdownLink::class, $prefix);
        Blade::component('input', Input::class, $prefix);
        Blade::component('select', Select::class, $prefix);
       
        //nav
        Blade::component('sidenav', Sidenav::class, $prefix);
        Blade::component('nav', Nav::class, $prefix);
        Blade::component('navbar', Navbar::class, $prefix);
        Blade::component('navbar-menu', NavbarMenu::class, $prefix);
        Blade::component('navbar-menu-link', NavbarMenuLink::class, $prefix);
        Blade::component('navbar-title', NavbarTitle::class, $prefix);

        //modals
        Blade::component('modal', Modal::class, $prefix);
        Blade::component('smodal', Smodal::class, $prefix);
        
        //notifications
        Blade::component('toast', Toast::class, $prefix);
        Blade::component('confirm', Confirm::class, $prefix);

        //basic
        Blade::component('table', Table::class, $prefix);
        Blade::component('tabs', Tabs::class, $prefix);
        Blade::component('td', Td::class, $prefix);
        Blade::component('th', Th::class, $prefix);

        //loaders
        Blade::component('sloader', Sloader::class, $prefix);
        Blade::component('loader', Loader::class, $prefix);

        //views
        $this->loadViewsFrom(__DIR__ . "/views", "dwbtui");

        //publish
        $this->publishes([
            __DIR__."/config/btui.php" => config_path('btui.php'),
            __DIR__."./../assets/btui_v2.0.4.css" => public_path('css/btui.css')
        ], 'btui');

        $this->publishes([
            __DIR__."./../assets/btui_v2.0.4.css" => public_path('css/btui.css')
        ], 'btui-update');

        Blade::directive('btuiStyles', function () {
            return <<< EOT
                <link rel='stylesheet' href='/css/btui.css' />
                EOT;
        });
        
    }



}