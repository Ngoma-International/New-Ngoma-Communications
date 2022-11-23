<?php

declare(strict_types=1);

namespace App\Http\Livewire\Frontend;

use App\Enums\SeminarEnum;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Livewire\WithPagination;

class Seminar extends Component
{
    use WithPagination;

    public function render(): Renderable
    {
        $seminars = \App\Models\Seminar::query()
            ->where('status', '=', SeminarEnum::SEMINAR_CONFIRMED)
            ->with(['category'])
            ->orderByDesc('created_at')
            ->paginate(9);

        return view('livewire.frontend.seminar', [
            'seminars' => $seminars
        ]);
    }
}
