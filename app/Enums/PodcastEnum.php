<?php

declare(strict_types=1);

namespace App\Enums;

enum PodcastEnum: string
{
    case Podcast_video = 'video';

    case Podcast_audio = 'audio';
}
