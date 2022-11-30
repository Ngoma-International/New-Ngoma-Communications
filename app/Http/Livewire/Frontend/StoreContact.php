<?php

declare(strict_types=1);

namespace App\Http\Livewire\Frontend;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class StoreContact extends Component
{
    public ?string $name = null;
    public ?string $email = null;
    public ?string $message = null;

    protected $rules = [
        'name' => [
            'required',
            'string',
            'min:2'
        ],
        'email' => [
            'required',
            'email'
        ],
        'message' => [
            'required',
            'string',
            'min:10'
        ]
    ];

    public function render(): Renderable
    {
        return view('livewire.frontend.store-contact');
    }

    public function storeContact()
    {
        $contact = $this->validate();
        $this->dispatchBrowserEvent('booking', [
            'type' => 'success',
            'message' => "Merci d'avoir pris contact avec nous, d'ici peut nous allons vous repondre"
        ]);
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->email = null;
        $this->name = null;
        $this->message = null;
    }
}
