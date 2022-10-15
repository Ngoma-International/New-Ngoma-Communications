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

    public function uploadThumbnail(Request $request): bool|string
    {
        return $request->file('thumbnail')
            ->storePublicly('/', ['disk' => 'public']);
    }

    public function removePathOfThumbnail($model): void
    {
        Storage::disk('public')
            ->delete($model->thumbnail);
    }

    public function uploadAudioOrVideo(Request $request): string
    {
        return $request->file('images_video')
            ->storePublicly('/', ['disk' => 'public']);
    }

    public function removeAudioOrVideo($model): void
    {
        Storage::disk('public')
            ->delete($model->images_video);
    }
}
