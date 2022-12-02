<?php

declare(strict_types=1);

namespace App\Http\Livewire\Frontend;

use App\Enums\EventEnum;
use App\Events\Frontend\StoreCollectifEvent;
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
    public string|null $organisation_country = null;
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

    protected array $rules = [
        'organisation_name' => [
            'required',
            'string',
            'min:3'
        ],
        'organisation_register_number' => [
            'required',
            'string',
            'unique:collectives'
        ],
        'organisation_industry' => [
            'required',
            'string',
            'min:3'
        ],
        'organisation_country' => [
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
            'email',
            'unique:collectives'
        ],
        'member_phone' => [
            'required',
            'string',
            'unique:collectives'
        ],
        'member_job_title' => [
            'required',
            'string',
        ],
        'member_number' => [
            'required',
            'integer'
        ],
        'contact_firstname' => [
            'required',
            'string'
        ],
        'contact_email' => [
            'required',
            'email',
            'unique:collectives'
        ],
        'contact_phone' => [
            'required',
            'string',
            'unique:collectives'
        ],
        'contact_job_title' => [
            'required',
            'string'
        ],
        'contact_username' => [
            'required',
            'string'
        ],
        'images' => [
            'required',
        ]
    ];

    public function render(): Renderable
    {
        return view('livewire.frontend.store-collectif-member');
    }

    public function submitCollectifMember()
    {
        $validation = $this->validate();
        $collectif = Collective::query()
            ->create(array_merge($validation, [
                'status' => EventEnum::PENDING
            ]));
        StoreCollectifEvent::dispatch($collectif);
        $this->dispatchBrowserEvent('booking', [
            'type' => 'success',
            'message' => 'Votre réservation a été effectuer avec succès'
        ]);
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->organisation_name = null;
        $this->organisation_register_number = null;
        $this->organisation_industry = null;
        $this->organisation_country = null;
        $this->organisation_city = null;
        $this->organisation_position = null;
        $this->organisation_province = null;
        $this->organisation_website = null;
        $this->member_username = null;
        $this->member_lastname = null;
        $this->member_email = null;
        $this->member_phone = null;
        $this->member_job_title = null;
        $this->member_number = null;
        $this->contact_username = null;
        $this->contact_firstname = null;
        $this->contact_email = null;
        $this->contact_phone = null;
        $this->contact_job_title = null;
        $this->images = null;
    }
}
