<?php

declare(strict_types=1);

namespace App\Http\Livewire\Frontend;

use App\Enums\BookingStatus;
use App\Events\BookingEvent;
use App\Models\Booking;
use App\Models\Seminar;
use App\Repository\Booking\StoreBookingRepository;
use App\Traits\HasTransaction;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class StoreBooking extends Component
{
    use LivewireAlert;
    use HasTransaction;
    public $username;
    public $firstname;
    public $email;
    public $phone_number;
    public $ticket_number;
    public $country;
    public $seminar;
    public StoreBookingRepository $repository;

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
        StoreBookingRepository $repository,
        Seminar $seminar
    )
    {
        $this->repository = $repository;
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
                    'seminar_id' => $this->seminar,
                    'transaction_code' => 0
                ]));
            BookingEvent::dispatch($booking);
            $this->alert('success', 'Votre reservation a ete effectuer', [
                'position' => 'top-center'
            ]);
            $this->resetForm();
        } catch (\Throwable $exception) {
            $this->alert('danger', $this->getMessages(), [
                'position' => 'top-center'
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
