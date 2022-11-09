<?php

declare(strict_types=1);

namespace App\Traits;

use App\Models\TemporaryImage;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

trait HasTemporary
{
    private function getTemporaryImages(User $user): Model|null
    {
        return TemporaryImage::query()
            ->where('user_id', '=', $user->id)
            ->first();
    }
}
