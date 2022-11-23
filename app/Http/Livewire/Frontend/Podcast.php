<?php

namespace App\Http\Livewire\Frontend;

use App\Enums\SeminarEnum;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class Podcast extends Component
{
    public function render(): Renderable
    {
        $podcasts = \App\Models\Podcast::query()
            ->where('status', '=', SeminarEnum::SEMINAR_CONFIRMED)
            ->orderByDesc('created_at')
            ->with(['type', 'offering'])
            ->paginate(6);
        return view('livewire.frontend.podcast', [
            'podcasts' => $podcasts
        ]);
    }
}
