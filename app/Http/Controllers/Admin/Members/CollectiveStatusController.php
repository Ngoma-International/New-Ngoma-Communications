<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Members;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CollectiveStatusRequest;
use App\Repository\Members\CollectiveStatusRepository;
use Illuminate\Http\JsonResponse;

class CollectiveStatusController extends Controller
{
    public function __invoke(
        CollectiveStatusRequest $request,
        CollectiveStatusRepository $repository
    ): JsonResponse {
        $collective = $repository->handle($request);

        return response()->json([
            'success' => 'Action executez avec success',
            'collective' => $collective
        ]);
    }
}
