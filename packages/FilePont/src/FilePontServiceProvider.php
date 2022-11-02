<?php

declare(strict_types=1);

namespace Scott\FilePont;

use Illuminate\Support\ServiceProvider;
use Scott\FilePont\Console\FilePontPackage;
use Scott\FilePont\Facades\FilePont;

class FilePontServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('filepont', fn($app) => new FilePont());
    }

    public function boot()
    {
        if ($this->app->runningInConsole()){
            $this->commands([FilePontPackage::class,]);
        }
    }
}
