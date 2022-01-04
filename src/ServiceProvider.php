<?php

namespace DefStudio\Tools;

use DefStudio\Tools\View\Components\Button;
use DefStudio\Tools\View\Components\ButtonContent;
use DefStudio\Tools\View\Components\Card;
use DefStudio\Tools\View\Components\ConfirmAction;
use DefStudio\Tools\View\Components\Container;
use DefStudio\Tools\View\Components\Dialog;
use DefStudio\Tools\View\Components\Icon;
use DefStudio\Tools\View\Components\Link;
use DefStudio\Tools\View\Components\Modal;
use DefStudio\Tools\View\Components\Select;
use DefStudio\Tools\View\Components\TextArea;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->loadViewComponentsAs(config('tools.tags_prefix', ''), [
            Button::class,
            ButtonContent::class,
            Card::class,
            ConfirmAction::class,
            Container::class,
            Dialog::class,
            Icon::class,
            Link::class,
            Modal::class,
            Select::class,
            TextArea::class,
        ]);

        $this->loadViewsFrom(__DIR__."/../resources/views", 'tools');

        $this->mergeConfigFrom(__DIR__."/../config/tools.php", 'tools');

        $this->publishes([
            __DIR__."/../resources/views" => resource_path('views/vendor/tools'),
        ], 'views');

        $this->publishes([
            __DIR__."/../config/tools.php" => config_path('tools.php'),
        ], 'config');
    }
}
