<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Podcast;

use App\Http\Controllers\Controller;
use App\Http\Requests\ThumbnailRequest;
use App\Models\TemporaryImage;
use App\Traits\HasImagesUploads;

class UploadThumbnailBackendController extends Controller
{
    use HasImagesUploads;

    public function __invoke(ThumbnailRequest $request): TemporaryImage
    {
        $temporary = $request->all();
        $temporary['images'] = self::uploadThumbnail($request);
        $temporary['user_id'] = auth()->id();
        return TemporaryImage::query()
            ->create($temporary);
    }

    public function destroy()
    {

    }
}
