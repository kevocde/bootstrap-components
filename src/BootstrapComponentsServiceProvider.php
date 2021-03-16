<?php

namespace Kevocde\BootstrapComponents;

use Illuminate\Support\ServiceProvider;
use Kevocde\BootstrapComponents\View\Components\Alert;
use Kevocde\BootstrapComponents\View\Components\Breadcrumb;
use Kevocde\BootstrapComponents\View\Components\Card;
use Kevocde\BootstrapComponents\View\Components\Menu;

class BootstrapComponentsServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/bootstrap-components.php' => config_path('bootstrap-components.php')
        ], 'config');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bc');

        $this->loadViewComponentsAs('bc', [
            Menu::class,
            Alert::class,
            Breadcrumb::class,
            Card::class
        ]);
    }

    /**
     * @inheritdoc
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/bootstrap-components.php',
            'bootstrap-components'
        );
    }
}
