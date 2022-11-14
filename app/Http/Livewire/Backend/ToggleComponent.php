<?php

declare(strict_types=1);

namespace App\Http\Livewire\Backend;

use App\Models\Booking;
use App\Traits\HasTransaction;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class ToggleComponent extends Component
{
    use HasTransaction;
    public Booking $booking;
    public $toggleBooking;
    public $field;


    public function mount()
    {
        $this->toggleBooking = (bool) $this
            ->booking
            ->getAttribute($this->field);
    }

    public function render(): Renderable
    {
        return view('livewire.backend.toggle-component');
    }

    public function updating($field, $value)
    {
        $this->booking->update([
            'status' => $value,
            'transaction_code' => $this->generateTransaction(8),
            'booking_at' => now()
        ]);

        session()->flash('message', "La mise a jours a ete effectuer sur cette reservation");
    }

}
