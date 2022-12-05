<?php

namespace App\Http\Livewire\Backend\Booking;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class ShowBooking extends Component
{
    protected $listeners = [
        'update' => 'updating'
    ];

    public function render(): Renderable
    {
        return view('livewire.backend.booking.show-booking');
    }
}
