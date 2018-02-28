<?php namespace Bantenprov\DDPesertaDidik;

use Illuminate\Support\ServiceProvider;
use Bantenprov\DDPesertaDidik\Console\Commands\DDPesertaDidikCommand;

/**
 * The DDPesertaDidikServiceProvider class
 *
 * @package Bantenprov\DDPesertaDidik
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DDPesertaDidikServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Bootstrap handles
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
        $this->publicHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('dd-peserta-didik', function ($app) {
            return new DDPesertaDidik;
        });

        $this->app->singleton('command.dd-peserta-didik', function ($app) {
            return new DDPesertaDidikCommand;
        });

        $this->commands('command.dd-peserta-didik');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'dd-peserta-didik',
            'command.dd-peserta-didik',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('dd-peserta-didik.php');

        $this->mergeConfigFrom($packageConfigPath, 'dd-peserta-didik');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'dd-peserta-didik');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/dd-peserta-didik'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'dd-peserta-didik');

        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/dd-peserta-didik'),
        ], 'views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => resource_path('assets'),
        ], 'dd-peserta-didik-assets');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'migrations');
    }

    public function publicHandle()
    {
        $packagePublicPath = __DIR__.'/public';

        $this->publishes([
            $packagePublicPath => base_path('public')
        ], 'dd-peserta-didik-public');
    }
}
