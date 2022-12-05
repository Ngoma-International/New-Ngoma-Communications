<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\Booking\BookingBackendController;
use App\Http\Controllers\Admin\Booking\SearchBookingBackendController;
use App\Http\Controllers\Admin\HomeBackendController;
use App\Http\Controllers\Admin\Members\CollectiveController;
use App\Http\Controllers\Admin\Members\CollectiveStatusController;
use App\Http\Controllers\Admin\Members\FacilitatorController;
use App\Http\Controllers\Admin\Members\MemberController;
use App\Http\Controllers\Admin\Members\MemberStatusController;
use App\Http\Controllers\Admin\Podcast\PodcastBackendController;
use App\Http\Controllers\Admin\Podcast\StatusPodcastBackendController;
use App\Http\Controllers\Admin\Podcast\UploadBackendController;
use App\Http\Controllers\Admin\Podcast\UploadThumbnailBackendController;
use App\Http\Controllers\Admin\Profile\PasswordUpdateBackendController;
use App\Http\Controllers\Admin\Profile\ProfileBackendController;
use App\Http\Controllers\Admin\Profile\UpdateProfileBackendController;
use App\Http\Controllers\Admin\Profile\UploadImageBackendController;
use App\Http\Controllers\Admin\programs\EventProgramsAdminController;
use App\Http\Controllers\Admin\Seminar\SeminarBackendController;
use App\Http\Controllers\Admin\Seminar\SeminarStatusBackendController;
use App\Http\Controllers\Admin\Seminar\SeminarUploaderController;
use App\Http\Controllers\Admin\Users\StatusUserBackendController;
use App\Http\Controllers\Admin\Users\UsersBackendController;
use App\Http\Controllers\App\HomeFrontendController;
use App\Http\Controllers\App\MemberFrontendController;
use App\Http\Controllers\App\PodcastFrontendController;
use App\Http\Controllers\App\SeminarFrontendController;
use App\Http\Controllers\App\StoreCollectifMemberController;
use App\Http\Controllers\App\StoreIndividualMemberController;
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
        Route::post('seminar-status', SeminarStatusBackendController::class)->name('seminar.status');
        Route::get('bookings', BookingBackendController::class)->name('booking.index');
        Route::delete('booking/{booking}', [BookingBackendController::class, 'destroy']);
        Route::get('bookings/{booking}', [BookingBackendController::class, 'show'])->name('booking.show');
        Route::get('search/', SearchBookingBackendController::class)->name('ticket.search');

        Route::get('collective', CollectiveController::class)->name('collective.index');
        Route::get('collective/{collective}', [CollectiveController::class, 'show'])->name('collective.show');
        Route::delete('collective/{collective}', [CollectiveController::class, 'destroy'])->name('collective.destroy');

        Route::get('individual', MemberController::class)->name('member.index');
        Route::get('individual/{member}', [MemberController::class, 'show'])->name('member.show');
        Route::delete('individual/{member}', [MemberController::class, 'destroy'])->name('member.destroy');

        Route::resource('facilitator', FacilitatorController::class);
        Route::resource('programs', EventProgramsAdminController::class);

        Route::get('profile', ProfileBackendController::class)->name('profile.index');
        Route::put('profile/{user}/update', [ProfileBackendController::class, 'update'])->name('profile.update');
        // update password
        Route::get('profile/password', PasswordUpdateBackendController::class)->name('profile.password');
        Route::put('profile/password/{user}/update', [PasswordUpdateBackendController::class, 'update'])->name('password.update');
        //update profile
        Route::get('profile/edit', UpdateProfileBackendController::class)->name('profile.edit');
        Route::put('profile/edit/{user}/update', [UpdateProfileBackendController::class, 'update'])->name('profile.update');

        Route::get('profile/security', [ProfileBackendController::class, 'security'])->name('profile.security');
        Route::get('profile/cursus', [ProfileBackendController::class, 'cursus'])->name('profile.cursus');
        //upload audio
        Route::post('profile-upload', UploadImageBackendController::class);
        Route::delete('profile-remove', [UploadImageBackendController::class, 'destroy']);
        //upload video
        Route::post('upload-video', UploadBackendController::class);
        Route::delete('remove-video', [UploadBackendController::class, 'destroy']);
        //upload thumbnail
        Route::post('upload-thumbnail', UploadThumbnailBackendController::class);
        Route::delete('remove-thumbnail', [UploadThumbnailBackendController::class, 'destroy']);
        Route::post('upload-seminar', SeminarUploaderController::class);
        Route::delete('remove-seminar', [SeminarUploaderController::class, 'delete']);

        Route::post('podcast-status', StatusPodcastBackendController::class)
            ->name('podcast.status');

        Route::post('member-status', MemberStatusController::class)->name('member.status');

        Route::post('collective-status', CollectiveStatusController::class)->name('collective.status');
    });
});

Route::get('about', [HomeFrontendController::class, 'about'])->name('about.index');
Route::get('leading', [HomeFrontendController::class, 'leading'])->name('leading.index');
Route::get('organisation', [HomeFrontendController::class, 'organisation'])->name('organisation.index');
Route::get('people', [HomeFrontendController::class, 'people'])->name('people.index');

Route::get('individual/create', StoreIndividualMemberController::class)->name('individual.create');
Route::get('collectif/create', StoreCollectifMemberController::class)->name('collectif.create');

Route::get('in-house', fn() => view('app.domain.membre.in-house'))->name('in.house');
Route::get('select-page', fn() => view('app.domain.program.selectPage'))->name('select.page');
Route::get('inquire', fn() => view('app.domain.program.inquire'))->name('inquire.page');
Route::get('keynote', fn() => view('app.domain.membre.keynote'))->name('keynote.page');
Route::get('executive', fn() => view('app.domain.membre.executive'))->name('executive.page');

Route::get('/', HomeFrontendController::class)->name('app.name');

Route::get('seminar/{seminar}', [SeminarFrontendController::class, 'show'])->name('seminar.show');
Route::get('podcast/{podcast}', [PodcastFrontendController::class, 'show'])->name('podcast.show');
Route::get('member/{user}', [MemberFrontendController::class, 'show'])->name('membre.show');
