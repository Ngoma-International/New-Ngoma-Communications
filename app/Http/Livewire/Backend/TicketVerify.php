<?php

declare(strict_types=1);

namespace App\Http\Livewire\Backend;

use App\Enums\BookingStatus;
use App\Models\Booking;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class TicketVerify extends Component
{
    public  $query = "";
    public $records;

    public function render(): Renderable
    {
        return view('livewire.backend.ticket-verify');
    }

    public function updatedQuery()
    {
        if (!empty(strlen($this->query) > 3)) {
            $this->records = Booking::query()
                ->where('firstname', '=', $this->query)
                ->orWhere('username', '=', $this->query)
                ->with('seminar')
                ->first();
        }
    }
}
