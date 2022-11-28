<?php

declare(strict_types=1);

namespace App\Http\Livewire\Frontend;

use App\Enums\BookingStatus;
use App\Events\BookingEvent;
use App\Models\Booking;
use App\Models\Seminar;
use App\Traits\HasTransaction;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class StoreBooking extends Component
{
    use HasTransaction;

    public $username = null;
    public $firstname = null;
    public $email = null;
    public $phone_number = null;
    public $ticket_number = null;
    public $country = null;
    public $seminar = null;

    protected array $rules = [
        'username' => [
            'required',
            'string',
            'min:3'
        ],
        'firstname' => [
            'required',
            'string',
            'min:3'
        ],
        'email' => [
            'required',
            'email',
        ],
        'phone_number' => [
            'required',
        ],
        'ticket_number' => [
            'required',
            'integer'
        ],
        'country' => [
            'required',
            'string'
        ],
    ];

    public function mount(
        Seminar $seminar
    ) {
        $this->seminar = $seminar;
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.store-booking');
    }

    public function storeBooking()
    {
        $validation = $this->validate();

        try {
            $booking = Booking::query()
                ->create(array_merge($validation, [
                    'status' => BookingStatus::Booking_pending,
                    'seminar_id' => $this->seminar->id,
                    'transaction_code' => 0
                ]));
            BookingEvent::dispatch($booking);

            $this->dispatchBrowserEvent('booking', [
                'type' => 'success',
                'message' => 'Votre réservation a été effectuer avec succès'
            ]);
            $this->resetForm();
        } catch (\Throwable $exception) {
            $this->dispatchBrowserEvent('booking', [
                'type' => 'error',
                'message' => $exception->getMessage()
            ]);
            $this->resetForm();
        }
    }

    public function resetForm()
    {
        $this->username = null;
        $this->firstname = null;
        $this->phone_number = null;
        $this->ticket_number = null;
        $this->email = null;
        $this->country = null;
    }
}
