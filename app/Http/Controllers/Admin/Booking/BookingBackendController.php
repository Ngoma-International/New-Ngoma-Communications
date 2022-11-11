<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Booking;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Repository\Booking\BookingBackendRepository;
use App\ViewModels\Booking\ShowBooking;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class BookingBackendController extends Controller
{
    public function __invoke(BookingBackendRepository $repository): Renderable
    {
        $bookings =  $repository->bookings();

        return view('admin.domain.booking.index', compact('bookings'));
    }

    public function show(Booking $booking): Factory|View|Application
    {
        $viewModel = new ShowBooking($booking);

        return view('admin.domain.booking.show', compact('viewModel'));
    }

    public function destroy(Booking $booking)
    {

    }
}
