<?php 

namespace Ncf\Lehr;
 
use Illuminate\Support\ServiceProvider;
 
class RiakServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/lehr.php' => $this->app->configPath('lehr.php'),
        ]);

        $this->publishes([
            __DIR__.'/../database/migrations/' => $this->app->databasePath('migrations')
        ], 'lehr-migrations');
    }
} 