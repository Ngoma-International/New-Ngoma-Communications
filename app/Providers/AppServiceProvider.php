<?php

namespace App\Providers;

use App\Contrat\App\FileStorageRepository;
use App\Contrat\ExtractMetaDataRepository;
use App\Contrat\PeriodDateTime;
use App\Services\MediaMetaData;
use App\Services\PeriodDateTimeService;
use Illuminate\Support\ServiceProvider;
use App\Repository\Seminar\FileStorageRepository as SeminarUploader;

class AppServiceProvider extends ServiceProvider
{
    protected array $repositories = [
        ExtractMetaDataRepository::class => MediaMetaData::class,
        PeriodDateTime::class => PeriodDateTimeService::class,
        FileStorageRepository::class => SeminarUploader::class
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
