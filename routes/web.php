<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MeetingController;
use App\Http\Controllers\Admin\PodcastsController;
use App\Http\Controllers\Admin\SeminarsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Dashboard Routes

Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard_home');
Route::get('dashboard/seminars', [SeminarsController::class, 'index'])->name('dashboard_seminars');
Route::get('dashboard/podcasts', [PodcastsController::class, 'index'])->name('dashboard_podcasts');
Route::get('dashboard/ticket', [SeminarsController::class, 'ticket_verifier'])->name('ticket_verifier');
Route::get('dashboard/bookings', [SeminarsController::class, 'all_bookings'])->name('all_bookings');
Route::get('dashboard/meetings', [MeetingController::class, 'index'])->name('meetings');
Route::get('dashboard/meetings/new', [MeetingController::class, 'create'])->name('meetings.create');
