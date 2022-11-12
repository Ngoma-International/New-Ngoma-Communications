<?php

declare(strict_types=1);

namespace App\Http\Livewire\Backend;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class TicketVerify extends Component
{
    public $ticket;

    public function render(): Renderable
    {
        return view('livewire.backend.ticket-verify');
    }
}
