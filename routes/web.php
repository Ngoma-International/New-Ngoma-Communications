<?php

declare(strict_types=1);

use App\Http\Controllers\Backend\HomeBackendController;
use App\Http\Controllers\Backend\Podcast\PodcastBackendController;
use App\Http\Controllers\Backend\ProfileBackendController;
use App\Http\Controllers\Backend\Seminar\SeminarBackendController;
use App\Http\Controllers\Backend\Seminar\SeminarStatusBackendController;
use App\Http\Controllers\Backend\Users\UsersBackendController;
use App\Http\Controllers\Frontend\HomeFrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::group([
        'prefix' => 'admins',
        'as' => 'admins.',
    ], function () {
        Route::get('backend', HomeBackendController::class)->name('backend.index');
        Route::resource('users', UsersBackendController::class);
        Route::resource('podcasts', PodcastBackendController::class);
        Route::resource('seminar', SeminarBackendController::class);
        Route::post('seminar-status', SeminarStatusBackendController::class);



        Route::get('profile', ProfileBackendController::class)->name('profile.index');
    });

    Route::group([
        'prefix' => 'users',
        'as' => 'users.',
        'middleware' => ['users'],
    ], function () {
        Route::get('backend', HomeBackendController::class)->name('backend.index');
    });

    Route::group([
        'prefix' => 'advisor',
        'as' => 'advisor.',
        'middleware' => ['advisor'],
    ], function () {
        Route::get('backend', HomeBackendController::class)->name('backend.index');
    });
});
Route::get('/', HomeFrontendController::class)->name('app.name');
