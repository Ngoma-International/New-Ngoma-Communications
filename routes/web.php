<?php

declare(strict_types=1);

use App\Http\Controllers\Backend\HomeBackendController;
use App\Http\Controllers\Frontend\HomeFrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();


Route::group([
    'prefix' => 'admins',
    'as' => 'admins.',
    'middleware' => ['admins', 'auth'],
], function () {
    Route::get('backend', HomeBackendController::class)->name('backend.name');
});

Route::get('/', HomeFrontendController::class)->name('app.name');

