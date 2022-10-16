<?php

namespace App\ViewModels\Booking;

use App\Http\Controllers\Backend\Booking\BookingBackendController;
use App\Models\Booking;
use App\Models\Seminar;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\ViewModels\ViewModel;

class ShowBooking extends ViewModel
{
    public string $indexUrl;

    public string $deleteUrl;

    public function __construct(public Booking $booking)
    {
        $this->indexUrl = action([BookingBackendController::class, '__invoke']);
        $this->deleteUrl = action([BookingBackendController::class, 'delete'], $this->booking);
    }


    public function booking(): Booking
    {
        return $this->booking;
    }

    public function seminar(): Model|Builder|Seminar|null
    {
        $seminar = Seminar::query()
            ->where('id', '=', $this->booking->id)
            ->first();
        return $seminar->load(['category', 'seminarType', 'user']);
    }
}
