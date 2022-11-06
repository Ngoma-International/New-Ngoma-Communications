<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Profile\UploadImageRequest;
use App\Models\TemporaryImage;
use App\Traits\HasImagesUploads;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class UploadImageBackendController extends Controller
{
    use HasImagesUploads;

    public function __invoke(UploadImageRequest $request): TemporaryImage
    {
        $temporary = $request->all();
        $temporary['images'] = self::uploadFiles($request);
        $temporary['user_id'] = auth()->id();
        return TemporaryImage::query()
            ->create($temporary);
    }
}
