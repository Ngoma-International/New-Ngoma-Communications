<?php

declare(strict_types=1);

namespace App\Repository\Seminar;

use App\Models\TemporaryImage;
use App\Traits\HasImagesUploads;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class FileStorageRepository implements \App\Contrat\App\FileStorageRepository
{
    use HasImagesUploads;

    public function storage($request): Model|Builder|TemporaryImage
    {
        $temporary = $request->validated();
        $temporary['images'] = self::uploadFiles($request);
        $temporary['user_id'] = auth()->id();
        return TemporaryImage::query()
            ->create($temporary);
    }

    public function delete(Request $request): Model|Builder|TemporaryImage|null
    {
        $temporary = json_decode($request->getContent());
        $media = TemporaryImage::query()
            ->where('id', '=', $temporary->id)
            ->first();
        $this->removePathOfImages($media);
        $media->delete();
        return $media;
    }
}
