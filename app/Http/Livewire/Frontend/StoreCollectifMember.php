<?php

declare(strict_types=1);

namespace App\Http\Livewire\Frontend;

use App\Models\Collective;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreCollectifMember extends Component
{
    use WithFileUploads;
    public string|null $organisation_name = null;
    public string|null $organisation_register_number = null;
    public string|null $organisation_industry = null;
    public string|null $organisation_position = null;
    public string|null $organisation_city = null;
    public string|null $organisation_province = null;
    public string|null $organisation_website = null;
    public string|null $member_username = null;
    public string|null $member_lastname = null;
    public string|null $member_email = null;
    public string|null $member_phone = null;
    public string|null $member_job_title = null;
    public string|null $member_number = null;
    public string|null $contact_username = null;
    public string|null $contact_firstname = null;
    public string|null $contact_email = null;
    public string|null $contact_phone = null;
    public string|null $contact_job_title = null;
    public string|null $images = null;
    public Collective $collective;

    protected array $rules = [
        'organisation_name' => [
            'required',
            'string',
            'min:3'
        ],
        'organisation_register_number' => [
            'required',
            'string',
            'min:3'
        ],
        'organisation_industry' => [
            'required',
            'string',
            'min:3'
        ],
        'organisation_position' => [
            'required',
            'string',
            'min:3'
        ],
        'organisation_city' => [
            'required',
            'string',
            'min:3'
        ],
        'organisation_province' => [
            'required',
            'string',
            'min:3'
        ],
        'organisation_website' => [
            'required',
            'string',
            'min:3'
        ],
        'member_username' => [
            'required',
            'string',
            'min:3'
        ],
        'member_lastname' => [
            'required',
            'string',
            'min:3'
        ],
        'member_email' => [
            'required',
            'string',
            'min:3'
        ],
        'member_phone' => [
            'required',
            'string',
            'min:3'
        ],
        'member_job_title' => [
            'required',
            'string',
            'min:3'
        ],
        'member_number' => [
            'required',
            'string',
            'min:3'
        ],
        'contact_firstname' => [
            'required',
            'string',
            'min:3'
        ],
        'contact_email' => [
            'required',
            'string',
            'min:3'
        ],
        'contact_phone' => [
            'required',
            'string',
            'min:3'
        ],
        'contact_job_title' => [
            'required',
            'string',
            'min:3'
        ],
        'contact_username' => [
            'required',
            'string',
            'min:3'
        ],
        'images' => [
            'required',
            'image'
        ]
    ];

    public function mount(Collective $collective)
    {
        $this->collective = $collective;
    }
    public function render(): Renderable
    {
        return view('livewire.frontend.store-collectif-member');
    }

    public function submitCollectifMember()
    {
        $collectif = $this->validate();
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
