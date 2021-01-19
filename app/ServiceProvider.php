<?php

namespace Bfg\Admin\UI;

use Admin\Extension\Providers\ApplicationProvider;
use Illuminate\Support\Facades\Blade;

/**
 * Class ServiceProvider
 * @package Bfg\UI
 */
class ServiceProvider extends ApplicationProvider
{
    /**
     * Extension ID name
     * @var string
     */
    static $name = "bfg/admin-ui";

    /**
     * Extension call slug
     * @var string
     */
    static $slug = "bfg_admin_ui";

    /**
     * @var string
     */
    public static $description = "BFG Admin UI Collection";

    /**
     * @var string
     */
    protected $config = Config::class;

    /**
     * @var array
     */
    protected $commands = [

    ];

    /**
     * The application's route middleware.
     * @var array
     */
    protected $routeMiddleware = [

    ];

    /**
     * Bootstrap services.
     *
     * @return void
     * @throws \Exception
     */
    public function boot()
    {
        Blade::componentNamespace('Bfg\\Admin\\UI\\Components', 'aui');

        Blade::componentNamespace(admin_app_namespace('Components'), 'uui');

        parent::boot();
    }

    /**
     * @throws \Exception
     */
    public function register()
    {
        /**
         * Merge config from having by default
         */
        $this->mergeConfigFrom(
            __DIR__.'/../config/admin-ui.php', 'admin-ui'
        );

        /**
         * Register publisher admin ui configs
         */
        $this->publishes([
            __DIR__.'/../config/admin-ui.php' => config_path('admin-ui.php'),
        ], 'admin-ui-config');

        /**
         * Register publisher admin ui assets
         */
        $this->publishes([
            __DIR__.'/../public' => admin_path_asset(),
        ], 'admin-ui-assets');

        parent::register();
    }
}

