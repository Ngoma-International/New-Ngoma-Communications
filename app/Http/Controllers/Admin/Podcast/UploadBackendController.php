<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Podcast;

use App\Contrat\ExtractMetaDataRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\UploadVideoOrAudioRequest;
use App\Models\MediaTemporary;
use App\Models\TemporaryImage;
use App\Services\MediaMetaData;
use App\Traits\HasImagesUploads;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UploadBackendController extends Controller
{
    use HasImagesUploads;

    public function __invoke(
        UploadVideoOrAudioRequest $request,
        ExtractMetaDataRepository $metaData
    ): Builder|Model {
        $temporary = $request->validated();
        $media = $metaData->extracts($temporary['images_video']);
        $temporary['extensions'] = $media->extractInfo()['mime_type'];
        $temporary['path'] = self::uploadAudioOrVideo($request);
        $temporary['user_id'] = auth()->id();
        return MediaTemporary::query()
            ->create($temporary);
    }

    public function destroy(Request $request): Model|Builder|MediaTemporary|null
    {
        $temporary = json_decode($request->getContent());
        $media = MediaTemporary::query()
            ->where('id', '=', $temporary->id)
            ->first();
        $this->removeAudioOrVideo($media);
        $media->delete();
        return $media;
    }
}
