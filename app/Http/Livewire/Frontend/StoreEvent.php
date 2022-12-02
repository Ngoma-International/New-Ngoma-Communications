<?php

declare(strict_types=1);

namespace App\Http\Livewire\Frontend;

use App\Enums\EventEnum;
use App\Events\EventStore;
use App\Models\Event;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use App\Models\Seminar;

class StoreEvent extends Component
{
    public ?string $firstname = null;
    public ?string $username = null;
    public ?string $email = null;
    public ?string $company = null;
    public ?string $jobTitle = null;
    public ?string $phone = null;
    public ?string $city = null;
    public ?string $category = null;
    public ?string $comments = null;
    public Seminar $seminar;

    protected array $rules = [
        'firstname' => [
            'required',
            'string',
            'min:3'
        ],
        'username' => [
            'required',
            'string',
            'min:3'
        ],
        'email' => [
            'required',
            'email:rfc,dns',
        ],
        'company' => [
            'required',
            'string',
            'min:3'
        ],
        'jobTitle' => [
            'required',
            'string',
            'min:3'
        ],
        'phone' => [
            'required',
            'string',
        ],
        'city' => [
            'required',
            'string',
        ],
        'category' => [
            'required',
            'string',
        ],
        'comments' => [
            'required',
            'string',
        ],
    ];

    public function mount(Seminar $seminar)
    {
        $this->seminar = $seminar;
    }

    public function render(): Renderable
    {
        return view('livewire.frontend.store-event');
    }

    public function submitPrivateEvent()
    {
        $validation = $this->validate();
        $booking = Event::query()
            ->create(array_merge($validation, [
                'status' => EventEnum::PENDING,
            ]));
        EventStore::dispatch($booking);
        $this->dispatchBrowserEvent('booking', [
            'type' => 'success',
            'message' => 'Votre evenement a ete envoyer avec success'
        ]);
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->firstname = null;
        $this->username =  null;
        $this->email = null;
        $this->company = null;
        $this->jobTitle = null;
        $this->phone = null;
        $this->city = null;
        $this->category = null;
        $this->comments = null;
    }
}
