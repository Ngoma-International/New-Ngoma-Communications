<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Podcast\Enums;

enum PodcastEnums: string
{
    case Podcast_video = 'video';

    case Podcast_audio = 'audio';
}
