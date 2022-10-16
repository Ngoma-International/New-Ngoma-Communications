<?php

declare(strict_types=1);

use App\Http\Controllers\Backend\Booking\BookingBackendController;
use App\Http\Controllers\Backend\Booking\SearchBookingBackendController;
use App\Http\Controllers\Backend\HomeBackendController;
use App\Http\Controllers\Backend\Podcast\PodcastBackendController;
use App\Http\Controllers\Backend\Profile\ProfileBackendController;
use App\Http\Controllers\Backend\Profile\UploadImageBackendController;
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
        Route::get('bookings', BookingBackendController::class)->name('booking.index');
        Route::get('bookings/{booking}', [BookingBackendController::class, 'show'])->name('booking.show');
        Route::get('search/', SearchBookingBackendController::class)->name('ticket.search');


        Route::get('profile', ProfileBackendController::class)->name('profile.index');
        Route::post('profile/upload', UploadImageBackendController::class)->name('profile.upload');
        Route::put('profile/{user}/update', [ProfileBackendController::class, 'update'])->name('profile.update');
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
