<?php

namespace App\Providers;

use App\Contrat\ExtractMetaDataRepository;
use App\Services\MediaMetaData;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected array $repositories = [
        ExtractMetaDataRepository::class => MediaMetaData::class,
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
