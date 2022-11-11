<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Podcast;

use App\Http\Controllers\Controller;
use App\Http\Requests\StatusPodcastRequest;
use App\Repository\Podcast\StatusPodcastRepository;
use Illuminate\Http\JsonResponse;

class StatusPodcastBackendController extends Controller
{
    public function __invoke(
        StatusPodcastRequest $request,
        StatusPodcastRepository $repository
    ): JsonResponse
    {
        $podcast = $repository->handle($request);

        return response()->json([
            'success' => 'Action executez avec success',
            'podcast' => $podcast
        ]);
    }
}
