<?php

declare(strict_types=1);

use App\Http\Controllers\Backend\Booking\BookingBackendController;
use App\Http\Controllers\Backend\Booking\SearchBookingBackendController;
use App\Http\Controllers\Backend\HomeBackendController;
use App\Http\Controllers\Backend\Podcast\PodcastBackendController;
use App\Http\Controllers\Backend\Profile\PasswordUpdateBackendController;
use App\Http\Controllers\Backend\Profile\ProfileBackendController;
use App\Http\Controllers\Backend\Profile\UpdateProfileBackendController;
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
        // upload images
        Route::post('profile/upload', UploadImageBackendController::class)->name('profile.upload');
        Route::put('profile/{user}/update', [ProfileBackendController::class, 'update'])->name('profile.update');
        // update password
        Route::get('profile/password', PasswordUpdateBackendController::class)->name('profile.password');
        Route::put('profile/password/{user}/update', [PasswordUpdateBackendController::class, 'update'])->name('password.update');
        //update profile
        Route::get('profile/edit', UpdateProfileBackendController::class)->name('profile.edit');
        Route::put('profile/edit/{user}/update', [UpdateProfileBackendController::class, 'update'])->name('profile.update');

        Route::get('profile/security', [ProfileBackendController::class, 'security'])->name('profile.security');
        Route::get('profile/cursus', [ProfileBackendController::class, 'cursus'])->name('profile.cursus');
    });

});
Route::get('/', HomeFrontendController::class)->name('app.name');
