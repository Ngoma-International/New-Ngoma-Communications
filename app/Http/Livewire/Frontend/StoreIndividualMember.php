<?php

declare(strict_types=1);

namespace App\Http\Livewire\Frontend;

use App\Enums\EventEnum;
use App\Events\StoreMemberEvent;
use App\Models\Member;
use App\Traits\HasTransaction;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreIndividualMember extends Component
{
    use HasTransaction;
    use WithFileUploads;

    public string|null $username = null;
    public string|null $firstname = null;
    public string|null $email = null;
    public string|null $birthday = null;
    public string|null $country = null;
    public string|null $city = null;
    public string|null $position = null;
    public string|null $department = null;
    public string|null $sector = null;
    public string|null $phone_number = null;
    public string|null $images = null;

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
            'unique:members'
        ],
        'birthday' => [
            'required',
            'date',
        ],
        'country' => [
            'required',
            'string',
        ],
        'city' => [
            'required',
            'string',
            'min:3'
        ],
        'position' => [
            'required',
            'string',
            'min:3'
        ],
        'department' => [
            'required',
            'string',
            'min:3'
        ],
        'sector' => [
            'required',
            'string',
            'min:3'
        ],
        'phone_number' => [
            'required',
            'string',
            'unique:members'
        ],
        'images' => [
            'required',
        ]
    ];

    public function render(): Renderable
    {
        return view('livewire.frontend.store-individual-member');
    }

    public function submitIndividualMember()
    {
        $validation = $this->validate();
        $member = Member::query()
            ->create(array_merge($validation, [
                'status' => EventEnum::PENDING
            ]));
        StoreMemberEvent::dispatch($member);
        $this->dispatchBrowserEvent('booking', [
            'type' => 'success',
            'message' => 'Votre enregistrement a ete effectuer vous allez recevoir un mail de confirmation avec votre code de member'
        ]);
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->username = null;
        $this->firstname = null;
        $this->email = null;
        $this->birthday = null;
        $this->country = null;
        $this->city = null;
        $this->position = null;
        $this->department = null;
        $this->sector = null;
        $this->phone_number = null;
        $this->images = null;
    }
}
