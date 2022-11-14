<?php

namespace App\Http\Livewire\Backend;

use App\Models\Booking;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class ResultSearchComponent extends Component
{
    public Booking $booking;

    public function render(): Renderable
    {
        $booking = $this->booking;

        return view('livewire.backend.result-search-component', compact('booking'));
    }
}
