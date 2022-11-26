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

    protected $listeners = [
        'updating' => 'updating'
    ];

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
        if ($value) {
            $this->booking->update([
                'status' => true,
                'transaction_code' => $this->generateTransaction(8),
                'booking_at' => now()
            ]);
            $this->emit('updating', $this->booking);
            $this->dispatchBrowserEvent('backend', [
                'type' => 'success',
                'message' => 'Reservation to be confirmed with success'
            ]);
        } else {
            $this->booking->update([
                'status' => $value,
            ]);
            $this->emit('updating', $this->booking);
            $this->dispatchBrowserEvent('backend', [
                'type' => 'danger',
                'message' => 'Reservation cancel'
            ]);
        }
    }
}
