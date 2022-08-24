<?php

namespace Devaweb\BladeTailUI;

require_once __DIR__."/Helpers/helpers.php";

use App\View\Components\btui\buttons\Btn;
use App\View\Components\btui\buttons\BtnLg;
use App\View\Components\btui\buttons\BtnLink;
use App\View\Components\btui\buttons\BtnSm;
use App\View\Components\btui\buttons\primary\Btn as PrimaryBtn;
use App\View\Components\btui\buttons\primary\BtnLg as PrimaryBtnLg;
use App\View\Components\btui\buttons\primary\BtnSm as PrimaryBtnSm;
use App\View\Components\btui\buttons\secondary\Btn as SecondaryBtn;
use App\View\Components\btui\buttons\secondary\BtnLg as SecondaryBtnLg;
use App\View\Components\btui\buttons\secondary\BtnSm as SecondaryBtnSm;
use App\View\Components\btui\forms\Alert as FormsAlert;
use App\View\Components\btui\forms\AlertDanger;
use App\View\Components\btui\forms\AlertSuccess;
use App\View\Components\btui\forms\AlertWarning;
use App\View\Components\btui\forms\Checkbox;
use App\View\Components\btui\forms\Input as FormsInput;
use App\View\Components\btui\forms\Radio;
use App\View\Components\btui\forms\Select as FormsSelect;
use App\View\Components\btui\utils\Dropdown as UtilsDropdown;
use App\View\Components\btui\utils\DropdownItem;
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
    Smodal,
    Html
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
        Blade::component('html', Html::class, $prefix);

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
            __DIR__."./../assets/btui_v2.2.0.css" => public_path('css/btui.css')
        ], 'btui');

        $this->publishes([
            __DIR__."./../assets/btui_v2.2.0.css" => public_path('css/btui.css')
        ], 'btui-update');

        Blade::directive('btuiStyles', function () {
            return <<< EOT
                <link rel='stylesheet' href='/css/btui.css' />
                EOT;
        });

        $this->versionThree();

    }

    public function versionThree()
    {

        $this->loadViewsFrom(__DIR__."/components", 'btui');
        //buttons
        Blade::component('btui::btn', 'btn');

        //forms
        Blade::component('btui::input', 'input');
        Blade::component('btui::checkbox', 'checkbox');
        Blade::component('btui::radio', 'radio');
        Blade::component('btui::select', 'select');
        Blade::component('btui::textarea', 'textarea');

        //alert
        Blade::component('btui::alert', 'alert');

        //dropdown
        Blade::component('btui::dropdown', 'dropdown');
        Blade::component('btui::dropdown-item', 'dropdown-item');

        //nav
        Blade::component('btui::nav', 'nav');
        Blade::component('btui::nav-item', 'nav-item');
        //sidenav
        Blade::component('btui::sidenav', 'sidenav');
        Blade::component('btui::sidenav-item', 'sidenav-item');
        Blade::component('btui::sidenav-sub-item', 'sidenav-sub-item');
        //navbar
        Blade::component('btui::navbar', 'navbar');

        //tabs
        Blade::component('btui::tabs', 'tabs');

        //modal
        Blade::component('btui::modal', 'modal');
        //page
        Blade::component('btui::page', 'page');

        //notifications
        Blade::component('btui::toast', 'toast');

        Blade::component('btui::loader', 'loader');

        //mobile
        Blade::component('btui::bottom-sheet', 'bottom-sheet');
        Blade::component('btui::mobile-layout', 'mobile-layout');

        //card
        Blade::component('btui::card', 'card');

    }



}