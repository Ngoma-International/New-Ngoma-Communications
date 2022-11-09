<?php

declare(strict_types=1);

namespace App\Services;

use App\Contrat\ExtractMetaDataRepository;
use Owenoj\LaravelGetId3\GetId3;

/**
 * @class MediaMetaData
 */
class MediaMetaData implements ExtractMetaDataRepository
{
    public function extracts($media): GetId3
    {
        return new GetId3($media);
    }
}
