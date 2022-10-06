<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class BookingBackendController extends Controller
{
    public function __invoke(): Factory|View|Application
    {
        $bookings = [];
        return view('backend.domain.booking.index', compact('bookings'));
    }
}
