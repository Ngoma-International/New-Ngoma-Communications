<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Profile\UploadImageRequest;
use App\Models\TemporaryImage;
use App\Traits\ImagesUploadsTrait;

class UploadImageBackendController extends Controller
{
    use ImagesUploadsTrait;

    public function __invoke(UploadImageRequest $request)
    {
        $temporary = $request->all();
        $temporary['images'] = self::uploadFiles($request);
        $temporary['user_id'] = auth()->id();
        TemporaryImage::query()
            ->create($temporary);
    }
}
