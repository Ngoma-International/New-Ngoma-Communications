<?php

declare(strict_types=1);

use App\Http\Controllers\Backend\Booking\BookingBackendController;
use App\Http\Controllers\Backend\ClassRoom\ClassRoomBackendController;
use App\Http\Controllers\Backend\HomeBackendController;
use App\Http\Controllers\Backend\Podcast\PodcastBackendController;
use App\Http\Controllers\Backend\ProfileBackendController;
use App\Http\Controllers\Backend\Seminary\SeminaryBackendController;
use App\Http\Controllers\Backend\Ticket\TicketBackendController;
use App\Http\Controllers\Backend\Users\UsersBackendController;
use App\Http\Controllers\Frontend\HomeFrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::group([
        'prefix' => 'admins',
        'as' => 'admins.',
        'middleware' => ['administration'],
    ], function () {
        Route::get('backend', HomeBackendController::class)->name('backend.index');
        Route::resource('users', UsersBackendController::class);
        Route::resource('seminary', SeminaryBackendController::class);
        Route::resource('podcast', PodcastBackendController::class);
        Route::get('booking', BookingBackendController::class)->name('booking.name');
        Route::get('ticket', TicketBackendController::class)->name('ticket.index');
        Route::resource('class-room', ClassRoomBackendController::class);
        Route::get('profile', ProfileBackendController::class)->name('profile.index');
    });

    Route::group([
        'prefix' => 'facilitator',
        'as' => 'facilitator.',
        'middleware' => ['facilitator'],
    ], function () {

    });

    Route::group([
        'prefix' => 'advisor',
        'as' => 'advisor.',
        'middleware' => ['advisor'],
    ], function () {

    });

});
Route::get('/', HomeFrontendController::class)->name('app.name');

