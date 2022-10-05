<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait ImagesUploadsTrait
{
    public static function uploadFiles(Request $request): string
    {
        return $request->file('images')
            ->storePublicly('/', ['disk' => 'public']);
    }

    public function removePathOfImages($model): void
    {
        Storage::disk('public')
            ->delete($model->images);
    }
}
