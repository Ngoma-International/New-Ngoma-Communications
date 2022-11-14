<?php

declare(strict_types=1);

namespace App\ViewModels;

use App\Models\Podcast;
use Spatie\ViewModels\ViewModel;

class ShowPodcastFrontend extends ViewModel
{
    public function __construct(
        public Podcast $podcast
    ) {
    }

    public function podcast(): Podcast
    {
        return $this->podcast->load(['type', 'offering']);
    }
}
