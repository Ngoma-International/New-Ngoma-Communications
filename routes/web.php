<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\Booking\BookingBackendController;
use App\Http\Controllers\Admin\Booking\SearchBookingBackendController;
use App\Http\Controllers\Admin\HomeBackendController;
use App\Http\Controllers\Admin\Podcast\PodcastBackendController;
use App\Http\Controllers\Admin\Podcast\UploadBackendController;
use App\Http\Controllers\Admin\Podcast\UploadThumbnailBackendController;
use App\Http\Controllers\Admin\Profile\PasswordUpdateBackendController;
use App\Http\Controllers\Admin\Profile\ProfileBackendController;
use App\Http\Controllers\Admin\Profile\UpdateProfileBackendController;
use App\Http\Controllers\Admin\Profile\UploadImageBackendController;
use App\Http\Controllers\Admin\Seminar\SeminarBackendController;
use App\Http\Controllers\Admin\Seminar\SeminarStatusBackendController;
use App\Http\Controllers\Admin\Users\StatusUserBackendController;
use App\Http\Controllers\Admin\Users\UsersBackendController;
use App\Http\Controllers\App\HomeFrontendController;
use App\Http\Controllers\App\MemberFrontendController;
use App\Http\Controllers\App\PodcastFrontendController;
use App\Http\Controllers\App\SeminarFrontendController;
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
        Route::post('user-status', StatusUserBackendController::class)->name('users.status');
        Route::resource('podcasts', PodcastBackendController::class);
        Route::resource('seminar', SeminarBackendController::class);
        Route::post('seminar-status', SeminarStatusBackendController::class);
        Route::get('bookings', BookingBackendController::class)->name('booking.index');
        Route::get('bookings/{booking}', [BookingBackendController::class, 'show'])->name('booking.show');
        Route::get('search/', SearchBookingBackendController::class)->name('ticket.search');


        Route::get('profile', ProfileBackendController::class)->name('profile.index');
        // upload images
        Route::post('profile-upload', UploadImageBackendController::class)->name('profile.upload');
        Route::delete('profile-remove', [UploadImageBackendController::class, 'remove']);
        Route::put('profile/{user}/update', [ProfileBackendController::class, 'update'])->name('profile.update');
        // update password
        Route::get('profile/password', PasswordUpdateBackendController::class)->name('profile.password');
        Route::put('profile/password/{user}/update', [PasswordUpdateBackendController::class, 'update'])->name('password.update');
        //update profile
        Route::get('profile/edit', UpdateProfileBackendController::class)->name('profile.edit');
        Route::put('profile/edit/{user}/update', [UpdateProfileBackendController::class, 'update'])->name('profile.update');

        Route::get('profile/security', [ProfileBackendController::class, 'security'])->name('profile.security');
        Route::get('profile/cursus', [ProfileBackendController::class, 'cursus'])->name('profile.cursus');

        Route::post('upload-video', UploadBackendController::class);
        Route::delete('remove-video', [UploadBackendController::class, 'destroy']);

        Route::post('upload-thumbnail', UploadThumbnailBackendController::class);
        Route::delete('remove-images', [UploadThumbnailBackendController::class, 'destroy']);

    });

});

Route::get('podcast', PodcastFrontendController::class)->name('podcast.index');
Route::get('podcast/{podcast}', [PodcastFrontendController::class, 'show'])->name('podcast.show');
Route::get('seminar', SeminarFrontendController::class)->name('seminar.index');
Route::get('seminar/{seminar}', [SeminarFrontendController::class, 'show'])->name('seminar.show');
Route::get('member', MemberFrontendController::class)->name('membre.index');
Route::get('member/{user}', [MemberFrontendController::class, 'show'])->name('membre.show');
Route::get('about', [HomeFrontendController::class, 'about'])->name('about.index');
Route::get('/', HomeFrontendController::class)->name('app.name');
