<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Podcast;

use App\Http\Controllers\Controller;
use App\Http\Requests\ThumbnailRequest;
use App\Models\TemporaryImage;
use App\Traits\HasImagesUploads;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UploadThumbnailBackendController extends Controller
{
    use HasImagesUploads;

    public function __invoke(ThumbnailRequest $request): TemporaryImage
    {
        $temporary = $request->validated();
        $temporary['images'] = self::uploadThumbnail($request);
        $temporary['user_id'] = auth()->id();
        return TemporaryImage::query()
            ->create($temporary);
    }

    public function destroy(Request $request): Model|Builder|TemporaryImage|null
    {
        $temporary = json_decode($request->getContent());
        $image = TemporaryImage::query()
            ->where('id', '=', $temporary->id)
            ->first();
        $this->removePathOfImages($image);
        $image->delete();
        return $image;
    }
}
