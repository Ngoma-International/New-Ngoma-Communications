<?php

declare(strict_types=1);

namespace App\ViewModels\Booking;

use App\Http\Controllers\Admin\Booking\BookingBackendController;
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
        $this->indexUrl = action([BookingBackendController::class]);
        $this->deleteUrl = action([BookingBackendController::class, 'destroy'], $this->booking);
    }


    public function booking(): Booking
    {
        return $this->booking;
    }

    public function seminar(): Model|Builder|Seminar|null
    {
        $seminar = Seminar::query()
            ->where('id', '=', $this->booking->seminar_id)
            ->first();
        return $seminar->load(['category', 'seminarType', 'user']);
    }
}
