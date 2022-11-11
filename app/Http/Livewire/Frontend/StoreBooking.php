<?php

declare(strict_types=1);

namespace App\Http\Livewire\Frontend;

use App\Enums\BookingStatus;
use App\Models\Booking;
use App\Traits\HasTransaction;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class StoreBooking extends Component
{
    use HasTransaction;
    public $username;
    public $firstname;
    public $email;
    public $phone_number;
    public $ticket_number;
    public $country;
    public $seminar;

    protected $rules = [
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
            'email:rfc,dns',
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

    public function render(): Factory|View|Application
    {
        return view('livewire.store-booking');
    }

    public function storeBooking()
    {
        $validation = $this->validate();

        try {
            Booking::query()
                ->create(array_merge($validation, [
                    'status' => BookingStatus::Booking_pending,
                    'seminar_id' => $this->seminar,
                    'transaction_code' => 0
                ]));
            $this->dispatchBrowserEvent('booking-store', [
                'type' => "success",
                'message' => "Votre reservation a ete effectuer"
            ]);
            $this->resetForm();
        } catch (\Throwable $exception) {
            $this->dispatchBrowserEvent('booking-store', [
                'type' => "success",
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
