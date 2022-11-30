<?php

declare(strict_types=1);

namespace App\Http\Livewire\Frontend;

use App\Models\Member;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class StoreIndividualMember extends Component
{
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
    public Member $member;

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
        ]
    ];


    public function mount(Member $member)
    {
        $this->member = $member;
    }

    public function render(): Renderable
    {
        return view('livewire.frontend.store-individual-member');
    }

    public function submitIndividualMember()
    {
        $member = $this->validate();
        $this->dispatchBrowserEvent('booking', [
            'type' => 'success',
            'message' => 'Votre réservation a été effectuer avec succès'
        ]);
        $this->resetForm();
    }

    public function resetForm()
    {

    }
}
